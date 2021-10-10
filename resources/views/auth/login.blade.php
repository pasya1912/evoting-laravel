<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">

            <h2 class="auth-title">E-VOTING ADMIN</h2>
            <p class="auth-subtitle mb-5">Jika anda operator Evoting silahkan login menggunakan email dan password</p>

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
                <input class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit" value="Login">
            </form>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
          <canvas id="canvas">
          </canvas>
        </div>
    </div>
</div>

    </div>
</body>

<script src="https://unpkg.com/starback@1.1.0/dist/starback.js"></script>
<script>
const canvas = document.getElementById('canvas')
const starback = new Starback(canvas, {
  width: canvas.parentElement.clientWidth,
  height: canvas.parentElement.clientHeight,  
  speed: 5,
  frequency: 5,
  slope: { x: 5, y: 3 },
  directionX: 1,
  spread: 0.2,
  randomOpacity: true,
  backgroundColor: ['#000cf0', '#0068f0', '#00aefa'],
})

starback.generateStar(20)

</script>
</html>

