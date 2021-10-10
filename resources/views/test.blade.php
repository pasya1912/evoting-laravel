<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LARAVEL LOGIN</title>

        <!-- Scripts -->
        <script src="js/app.js" defer></script>
        
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/csslanding.css" rel="stylesheet">
    </head>
	<body class="bg-homeBackground bg-no-repeat bg-cover">
		<!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="flex mobile:justify-center mx-auto px-4 ">
					<div class="flex space-x-7">
						<div class="flex">
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="img/Smanegeri36.gif" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-semibold text-gray-500  text-lg">E-VOTING</span>
							</a>
						</div>
                    </div>
            </div>
		</nav>
        <section class="flex justify-center ">
        <div class="w-1/3 tablet:w-3/5 mobile:w-11/12 mt-10 border-t-12 bg-white mb-3 rounded-lg shadowww">
        <div>
            <span class="flex justify-center text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-blue-900 font-bold mobile:text-base tablet:text-lg text-2xl">Silahkan Masukan Token Untuk Memvoting</span>
            </div>
            <div>
            <img class="object-contain mobile:h-44 h-64 pt-8 mt-10  w-full" src='img/Smanegeri36.gif'></img>
            </div>
            <div class="flex p-8 border-t-12 justify-center">
                <div class="mb-4 w-1/2">
                  <form action="/" method="POST">
                    <label class="flex font-bold text-grey-darker mb-2 justify-center">Token</label>
                    <input type="text" class="text-center block appearance-none w-full bg-white border border-grey-light hover:border-gray-700 px-2 py-2 rounded shadow" placeholder="Token">
                    
                    <button type="submit" class="transition duration-500 ease-in-out transform focus:-translate-y-1 focus:scale-95 text-center font-bold block appearance-none w-full bg-blue-500 border border-grey-light ring-indigo-300 focus:ring-4  hover:border-blue-900 mt-2 px-2 py-2 rounded shadow">LOGIN</button>
                  </form>
                </div>

                
            </div>
        </div>
        </section>
        <footer class="footer bg-transparent relative pt-1 border-b-2 border-gray-300">
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="mobile:w-2/3 text-center py-6">
                <p class="text-sm text-red-700 font-extrabold mb-2">
                    Designed by someone
                </p>
            </div>
        </div>
    </div>
</footer>
	</body>
</html>