<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/pages/auth.css">
</head>

<body>
    <div class="h-100">
        <section class="h-screen">
            <div class="container px-6 py-12 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="w-full"
                    alt="Phone image"
                />
                </div>
                <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                    <p class="text-center mb-5 text-2xl text-sky-700 uppercase font-bold">Halaman Login Admin</p>
                    <form class="form-auth-small" action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="email"placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl"  name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <input class="btn text-white bg-blue-600 hover:bg-blue-700 btn-block btn-lg shadow-lg mt-5" type="submit" value="Login">
                    </form>
                </div>
            </div>
            </div>
        </section>
    <div class="row h-100">
</body>
</html>
