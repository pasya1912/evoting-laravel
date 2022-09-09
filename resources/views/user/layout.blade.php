<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="js/app.js" defer></script>
        
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/csslanding.css" rel="stylesheet">
    </head>
	<body class="bg-no-repeat bg-cover h-full">
		<!-- Navbar goes here -->
        <div>
            <nav class="bg-white shadow-lg">
                <div class="flex mobile:justify-center mx-auto px-4 ">
                        <div class="flex space-x-7">
                            <div class="flex">
                                <!-- Website Logo -->
                                <a href="#" class="flex items-center py-4 px-2">
                                    <img src="/img/Smanegeri36.gif" alt="Logo" class="h-8 w-8 mr-2">
                                    <span class="font-semibold text-gray-500  text-lg">E-VOTING</span>
                                </a>
                            </div>
                        </div>
                </div>
            </nav>
            <main>
                @yield('page')
            </main >
        </div>
	</body>
    <script>
        <?php
        if($message = Session::get('gagal')){
            echo $message;
        }
        ?>
        </script>
</html>