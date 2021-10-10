<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voting | @yield('judul_halaman')</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
<link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    @yield('head')

</head>
@yield('css')
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <span class="text" style="color: #435ebe;">E-VOTING</span>
            </div>
            <div class="toggler">
                <a  class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-item <?php if($judul == 'Dashboard') :?>active<?php endif;?> ">
                <a href="{{ route('home') }}" class='sidebar-link'>
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-item <?php if($judul == 'Kandidat') :?>active<?php endif;?> ">
                <a href="{{ route('admin.kandidat') }}" class='sidebar-link'>
                    <i class="bi bi-person-square"></i>
                    <span>Kandidat</span>
                </a>
            </li>
            <li class="sidebar-item <?php if($judul == 'Voters') :?>active<?php endif;?> ">
                <a href="{{ route('admin.voters') }}" class='sidebar-link'>
                <i class="bi bi-people"></i>
                <span>Voters</span>
            </a>
            </li>
            <li class="sidebar-item <?php if($judul == 'Setting') :?>active<?php endif;?> ">
                <a href="{{ route('admin.setting') }}" class='sidebar-link'>
                    <i class="bi bi-gear"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class='sidebar-link'>
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>@yield('judul_halaman')</h3>
</div>
<div class="page-content">
    <section class="card">
    @yield('konten')
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Open-Source Mazer Template</p>
                    </div>
                    <div class="float-end">
                        <p>Built by <a
                                href="http://ahmadsaugi.com">Rafli Pasya</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    
<script src="/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="/assets/js/mazer.js"></script>
@yield('js')
@if (Session::has('alert'))
  <script>
  alert('{{Session::get("alert")}}');
  </script>
  @endif
  @if ($errors->any())
  <script>

                @foreach ($errors->all() as $error)
                alert('{{$error}}');
                @endforeach
  </script>
  @endif
</body>

</html>
