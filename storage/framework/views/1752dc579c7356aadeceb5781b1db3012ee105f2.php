<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Admin E-Voting | <?php echo $__env->yieldContent('judul_halaman'); ?></title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- LARAVEL CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/mycss.css')); ?>">
<!--   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>"> -->
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('/vendor/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/vendor/font-awesome/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/vendor/linearicons/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/vendor/chartist/css/chartist-custom.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/main.css')); ?>">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <!-- DATATABLES -->
  <link href="<?php echo e(asset('/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="" style="font-size:30px;font-weight:bold;"><!-- <img src="<?php echo e(asset('/img/logo-dark.png')); ?>" alt="Klorofil Logo" class="img-responsive logo"> -->
          E-Voting
        </a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset('/img/user.png')); ?>" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="lnr lnr-exit"></i><?php echo e(__('Logout')); ?>

                                    </a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <!-- Variabel judul halaman -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
           
            <li><a href="<?php echo e(route('home')); ?>" class="<?php if($judul == 'Dashboard') :?>active<?php endif;?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo e(route('admin.kandidat')); ?>" class="<?php if($judul == 'Kandidat') :?>active<?php endif;?>"><i class="lnr lnr-user"></i> <span>Kandidat</span></a></li>
            <li><a href="<?php echo e(route('admin.voters')); ?>" class="<?php if($judul == 'Voters') :?>active<?php endif;?>"><i class="lnr lnr-users"></i> <span>Voters</span></a></li>
              <li><a href="<?php echo e(route('admin.setting')); ?>" class="<?php if($judul == 'Setting') :?>active<?php endif;?>"><i class="lnr lnr-users"></i> <span>Setting</span></a></li>
            <li><a  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="lnr lnr-exit"></i><?php echo e(__('Logout')); ?></a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <?php echo $__env->yieldContent('konten'); ?>
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">Template by <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. Customized by <a href="#" target="_blank">?</a>.</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
 
  <script src="<?php echo e(asset('/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/chartist/js/chartist.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/js/klorofil-common.js')); ?>"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


  <?php echo $__env->yieldContent('js'); ?>  

  <?php if(Session::has('alert')): ?>
  <script>
  alert('<?php echo e(Session::get("alert")); ?>');
  </script>
  <?php endif; ?>
  <?php if($errors->any()): ?>
  <script>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                alert('<?php echo e($error); ?>');
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </script>
  <?php endif; ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>