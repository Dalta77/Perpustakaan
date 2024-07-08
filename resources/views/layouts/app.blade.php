<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard Perpustakaan</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!-- Paper Dashboard core CSS -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!-- CSS for Demo Purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!-- Fonts and icons -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<div id="app" class="d-flex flex-column min-vh-100">
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        PerpustakaanApp
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('anggota.index') }}">
                            <i class="ti-user"></i>
                            <p>Anggota</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('peminjaman.index') }}">
                            <i class="ti-view-list-alt"></i>
                            <p>Peminjaman</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('buku.index') }}">
                            <i class="ti-book"></i>
                            <p>Buku</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('penulis.index') }}">
                            <i class="ti-pencil-alt"></i>
                            <p>Penulis</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rak.index') }}">
                            <i class="ti-folder"></i>
                            <p>Rak</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sanksi.index') }}">
                            <i class="ti-alert"></i>
                            <p>Sanksi</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="bg-dark text-center text-light py-3 mt-auto">
                <div class="container">
                    <span>©2024, made by Virgilius Dalta Suprias Nandigna</span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- Core JS Files -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!-- Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!-- Notifications Plugin -->
<script src="assets/js/bootstrap-notify.js"></script>

<!-- Google Maps Plugin -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize any scripts here if needed
    });
</script>

</body>
</html>
