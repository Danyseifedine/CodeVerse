<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateLayout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:layout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a layout with header and footer Blade views.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $layoutName = $this->argument('name');
        $layoutPath = resource_path("views/layouts/partiels");
        $MasterLayout = resource_path("views/layouts");

        $headerContent = <<<EOT
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!--=============== REMIXICONS ===============-->
            <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

            <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

            {{-- ============ BOOTSTRAP ICON --}}
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

            <!--=============== CSS ===============-->
            {{-- Add your custom CSS links here --}}

            <!--=============== jquery===============-->
            <script src="https://code.jquery.com/jquery-3.7.0.min.js"
                integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

            <title>@yield('title', 'default')</title>
        </head>
        <body>
        EOT;

        $footerContent = <<< EOT
        <!-- Site footer -->

        <footer>

        <!-- ==== footer content === -->

        </footer>
        <!--=============== MAIN JS ===============-->

        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        EOT;


        $masterContent = <<< EOT
        <!-- Include the header section -->
        @include('layouts.partiels.header')

        @yield('content')

        @include('layouts.partiels.footer')

        </body>

        </html>
        EOT;

        if (!file_exists($layoutPath)) {
            mkdir($layoutPath, 0755, true);
            file_put_contents("$layoutPath/header.blade.php", $headerContent);
            file_put_contents("$layoutPath/footer.blade.php", $footerContent);
            file_put_contents("$MasterLayout/master.blade.php", $masterContent);

            $this->info("Layout with header and footer views generated.");
        } else {
            $this->error("Layout already exists.");
        }
    }
}
