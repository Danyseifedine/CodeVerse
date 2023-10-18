<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BaseController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:basecontroller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a base controller that contains some function';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseControllerContent = <<<EOT
        <?php

        namespace App\Http\Controllers;

        use App\Models\User;
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Auth;
        use Illuminate\Support\Facades\Hash;

        class BaseController extends Controller
        {
            function Move(
                \$type = ['redirect_with_message', 'redirect_back', 'redirect', 'back_with_message'],
                \$view = null,
                \$Message_key = null,
                \$Message_value = null
            ) {

                // you can use this function to redirect whenever you want

                if (\$type == 'redirect_with_message') {
                    return redirect()->route(\$view)->with(\$Message_key, \$Message_value);
                } elseif (\$type == 'redirect_back') {
                    return redirect()->back();
                } elseif (\$type == 'back_with_message') {
                    return redirect()->back()->with(\$Message_key, \$Message_value);
                } elseif ('redirect') {
                    return redirect(\$view);
                }
            }

            // get data from request
            function GetFromReuqest(Request \$request, \$InputName)
            {
                return \$request->get(\$InputName);
            }

            function GetFileFromRequest(Request \$request, \$InputName)
            {
                return  \$request->file(\$InputName);
            }


            // select query
            function Select_column(
                \$type = ['paginate', 'first'],
                \$model,
                \$ColumnName,
                \$where = [],
                \$paginateNumber = 12,
                \$orderBy_Column = null,
                \$orderBy_Type = null
            ) {
                if (\$type == 'first') {
                    \$datas = \$model::select(\$ColumnName)->where(\$where)->first();
                    return \$datas;
                } elseif (\$type == 'paginate') {
                    \$datas = \$model::select(\$ColumnName)->where(\$where)->orderBy(\$orderBy_Column, \$orderBy_Type)->paginate(\$paginateNumber);
                    return \$datas;
                }
            }




            // update or create or delete
            function CRUD(
                \$model,
                \$constraint = [],
                \$function = ['create', 'update', 'delete'],
                \$data_To_Update_Or_Create = null
            ) {
                if (\$function == "delete") {
                    return \$model::where(\$constraint)->delete();
                } else if (\$function == "update") {
                    return \$model::where(\$constraint)->update(\$data_To_Update_Or_Create);
                } elseif (\$function == 'create') {
                    return \$model::create(\$data_To_Update_Or_Create);
                }
            }

            // language //

            // function Convert_Language(\$local_language)
            // {
            //     \$allowedLocales = ['ar', 'en', 'fr', 'es', 'de', 'it', 'pt', 'ru', 'zh'];

            //     if (in_array(\$local_language, \$allowedLocales)) {
            //         session(['locale' => \$local_language]);
            //     }

            //     return redirect()->back();
            // }


            // auth attempt

            function attemptAuthentication(Request \$request)
            {
                \$credentials = \$request->only('email', 'password');
                return Auth::attempt(\$credentials);
            }

            function ViewWithData(
                \$view,
                \$key_1,
                \$value_1,
                \$key_2 = null,
                \$value_2 = null,
                \$key_3 = null,
                \$value_3 = null,
                \$key_4 = null,
                \$value_4 = null,
                \$key_5 = null,
                \$value_5 = null,
            ) {
                return view(\$view, [\$key_1 => \$value_1, \$key_2 => \$value_2, \$key_3 => \$value_3, \$key_4 => \$value_4, \$key_5 => \$value_5]);
            }

            //
            // ================= Image changing ================ //
            function uploadFile(\$type = ['pdf', 'image'], \$file, \$path_Folder)
            {
                if (\$type == 'image') {
                    \$extension = strtolower(\$file->extension());
                    \$filename = time() . rand(1, 10000) . "." . \$extension;
                    \$file->move(public_path(\$path_Folder), \$filename);
                    return \$filename;
                } elseif (\$type == 'pdf') {
                    \$pdfFileName = time() . rand(1, 10000) . '.' . \$file->getClientOriginalExtension();
                    \$file->move(public_path(\$path_Folder), \$pdfFileName);
                    return \$pdfFileName;
                }
            }

            // Delete old image

            function DeleteOldImage(\$folder_name, \$auth_user, \$Image_column_name)
            {
                if (\$auth_user->\$Image_column_name) {
                    \$oldImage = public_path(\$folder_name) . '/' . \$auth_user->\$Image_column_name;
                    if (file_exists(\$oldImage)) {
                        unlink(\$oldImage);
                    }
                }
            }

            function USER_IMAGE(
                \$TYPE = ['REMOVE', 'CHANGE'],
                Request \$request,
                \$image,
                \$ColumnName = null,
                \$folder_name = null
            ) {
                if (\$TYPE == 'REMOVE') {
                    \$user = Auth::user();
                    \$this->DeleteOldImage(\$folder_name, \$user, \$ColumnName);
                    \$dataToUpdate = [\$ColumnName => null];
                    return \$this->CRUD(User::class, ['id' => \$user->id], 'update', \$dataToUpdate);
                } elseif (\$TYPE == 'CHANGE') {
                    \$image = \$request->image;
                    \$filename = \$this->uploadFile('image', \$image, \$folder_name);
                    \$user = Auth::user();
                    \$this->DeleteOldImage(\$folder_name, \$user, \$ColumnName);
                    \$dataToUpdate = [\$ColumnName => \$filename];
                    return \$this->CRUD(User::class, ['id' => \$user->id], 'update', \$dataToUpdate);
                }
            }

            // ================= Image function ends ================ //


            // Change password

            function CHECK_OLD_PASSWORD(\$old_password)
            {
                \$user = Auth::user();

                return !Hash::check(\$old_password, \$user->password);
            }

            function CHECK_CONFIRMED_PASSWORD(\$new_password, \$confirm_password)
            {
                return \$new_password !== \$confirm_password;
            }

            function CHANGE_PASSWORD(\$old_password, \$new_password, \$confirmed_password)
            {
                \$user = Auth::user();
                if (!Hash::check(\$old_password, \$user->password)) {
                } elseif (\$new_password !== \$confirmed_password) {
                } else {
                }
            }
        }

    EOT;

        $basePath = app_path('Http/Controllers');

        file_put_contents("$basePath/BaseController.php", $baseControllerContent);

        $this->info("BaseController file generated successfully.");
    }
}
