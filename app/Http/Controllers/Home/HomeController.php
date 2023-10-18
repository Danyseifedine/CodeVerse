<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\SnippetRequest;
use App\Models\Blog;
use App\Models\Home;
use App\Models\Messages;
use App\Models\Snippet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    function page() {

        return view('page');
    }
    function index()
    {

        $data = $this->Select_column('first', Home::class, '*', null);

        if (Auth::check()) {
            $user = auth()->user();
            return $this->ViewWithData('home', 'data', $data, 'user', $user);
        }

        return $this->ViewWithData('home', 'data', $data);
    }

    function Blog()
    {
        $posts = $this->Select_column('paginate', Blog::class, '*', [], 12, 'created_at', 'DESC');
        $admins = $this->Select_column('paginate', User::class, '*', ['role' => 2], 10, 'id', 'DESC');

        foreach ($admins as $admin) {
            $blogCount = Blog::where('user_id', $admin->id)->count();
            $admin->blog_count = $blogCount;
        }

        return $this->ViewWithData('Blog', 'posts', $posts, 'admins', $admins);
    }

    public function SendMessage(MessageRequest $request)
    {

        $user = auth()->user();
        $data = [
            'user_id' => $user->id,
            'subject' => $this->GetFromReuqest($request, 'subject'),
            'message' => $this->GetFromReuqest($request, 'message')
        ];

        $store = $this->CRUD(Messages::class, null, 'create', $data);

        return $this->Move('redirect_with_message', 'home', 'message_sent', '');
    }

    function CreateSnippet()
    {
        $user = auth()->user();

        return $this->ViewWithData('CreateSnippet', 'user', $user);
    }

    function insertSnippet(SnippetRequest $request)
    {
        $user = auth()->user();

        $image = $this->GetFileFromRequest($request, 'snippet_image');

        $fileName = $this->uploadFile('image', $image, 'Snippet_file');


        $data = [
            'user_id' => $user->id,
            'title' => $this->GetFromReuqest($request, 'snippet_title'),
            'description' => $this->GetFromReuqest($request, 'snippet_type'),
            'image' => $fileName,
            'category' => $this->GetFromReuqest($request, 'snippet_category'),
            'code' => $this->GetFromReuqest($request, 'snippet_code')
        ];

        $insert = $this->CRUD(new Snippet(), null, 'create', $data);
        if ($insert) {
            return $this->Move('back_with_message', null, 'sent', 'Your snippet have been sent wait until the admin accept or reject it');
        }
    }


    // see snippet

    function GetSnippet($name, $id)
    {
        $user = auth()->user();
        $snippet = $this->Select_column('first', Snippet::class, '*', ['id' => $id]);

        return $this->ViewWithData('Snippet/SeeSnippet', 'data', $user, 'snippet', $snippet);
    }

    // components

    function Components()
    {
        $user = auth()->user();

        $snippet = $this->Select_column('paginate', Snippet::class, '*', ['status' => 'published'], 12, 'created_at', 'DESC');
        return $this->ViewWithData('Snippet/AllSnippet', 'data', $user, 'snippets', $snippet);
    }

    function search_compenent(Request $request)
    {
        $query = $request->input('query');
        $searchOption1 = $request->input('searchOption_1');
        $searchOption2 = $request->input('searchOption_2');
        $searchOption3 = $request->input('searchOption_3');

        $messagesQuery = Snippet::query();

        $messagesQuery->join('users', 'snippets.user_id', '=', 'users.id');

        $messagesQuery->select('snippets.*', 'users.name as user_name', 'users.email as user_email');

        $messagesQuery->where(function ($queryBuilder) use ($query, $searchOption1, $searchOption2, $searchOption3) {
            $queryBuilder->where('users.name', 'LIKE', '%' . $query . '%'); // Search by user name

            if ($searchOption1 === 'byTitle') {
                $queryBuilder->orWhere('snippets.title', 'LIKE', '%' . $query . '%'); // Search by user email
            }

            if ($searchOption2 === 'byCategory') {
                $queryBuilder->orWhere('snippets.category', 'LIKE', '%' . $query . '%'); // Search by message subject
            }

            if ($searchOption3 === 'byType') {
                $queryBuilder->orWhere('snippets.description', 'LIKE', '%' . $query . '%'); // Search by message subject
            }
        });

        $datas = $messagesQuery->paginate(12);

        // $iterationCount = ($datas->currentPage() - 1) * $datas->perPage();

        return view('admin/search/search_result_component', [
            'snippets' => $datas,

        ]);
    }
}
