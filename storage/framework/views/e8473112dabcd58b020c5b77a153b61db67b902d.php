<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/indexVoting.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title><?php echo $__env->yieldContent('judul'); ?></title>
</head>
<style>
    .zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
hr.solid {
    size: cover;
    border-top: 2px solid #999;
}
</style>
<body class="bg-homeBackground bg-no-repeat bg-cover">
    <!-- Nav -->
    <nav class="bg-white shadow-lg">
			<div class="flex mobile:justify-center mx-auto px-4">
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
<div class="container">
   <!-- End Nav -->
<?php echo $__env->yieldContent('konten'); ?>
</div>
<footer class="footer bg-transparent relative pt-1 border-b-2 border-t-2 border-gray-300 ">
    <div class="container">
        <div class="flex mt-2 border-gray-300 justify-center">
            <div class="mobile:w-2/3 text-center py-6">
                <p class="text-sm text-red-700 font-extrabold mb-2">
                    Designed by someone
                </p>
            </div>
        </div>
    </div>
</footer>
    <script>

<?php echo $__env->yieldContent('js'); ?>

<?php if(!empty(session('error'))): ?>
alert('<?php echo e(session('error')); ?>')
location.href="/logoutvoting";
<?php endif; ?>
</script>
<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/voting/master.blade.php ENDPATH**/ ?>