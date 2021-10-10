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
	<body class="bg-gradient-to-b from-white to-gray-700 bg-no-repeat bg-cover h-full">
		<!-- Navbar goes here -->
        <div class="flex flex-col h-screen justify-between">
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
        <main  class="flex justify-center ">
            @yield('page')
        </main >
        <footer class=" mt-5 footer bg-transparent relative pt-1 border-b-2 border-t-2 border-gray-300">
    <div class="container mx-auto px-6">
        <div class="mt-2     border-gray-300 flex flex-col items-center">
            <div class="mobile:w-2/3 text-center py-6">
                <p class="text-sm text-red-700 font-extrabold mb-2">
                    Built by Rafli Pasya
                </p>
            </div>
        </div>
    </div>
</footer>
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