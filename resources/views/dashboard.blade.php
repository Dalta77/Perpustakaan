<!doctype html>
<html lang="en">
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

    <!-- Font Awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <!-- Themify Icons -->
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <!-- Custom CSS for Card Styling -->
    <style>
        .card {
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card .content {
            padding: 15px;
        }
        .card img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            border-bottom: 1px solid #ddd;
        }
        .card .title {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .card .btn-lihat {
            width: 100%;
            margin-top: 10px;
        }

        .footer-custom {
            background-color: #E76F51;
            padding: 20px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-custom p{
            color: #fff;
        }

        .jam-operasional, .catatan {
            flex-basis: 50%; /* Set lebar relatif untuk konten */
            margin-bottom: 10px; /* Jarak antar elemen */
        }

        .jam-operasional p, .catatan p {
            padding: 5px;
            text-align: left;
            margin-bottom: 5px; /* Jarak antar paragraf */
        }flex: 0; /* Tetap ukuran sesuai kontennya */
        }


    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    PerpustakaanApp
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="{{ route('anggota.index') }}">
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
                        <i class="ti-text"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penulis.index') }}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Penulis</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('rak.index') }}">
                        <i class="ti-map"></i>
                        <p>Rak</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sanksi.index') }}">
                        <i class="ti-bell"></i>
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
                <div class="row text-center">
                    <div class="col-md-2 col-md-offset-1">
                        <div class="card">
                            <img src="assets/img/metodologi.jpeg" class="img-responsive" alt="Buku 1">
                            <div class="content">
                                <h4 class="title">Metodologi Penelitian</h4>
                                <p class="text-muted">penjelasan tentang tujuan dari penelitian metodologis, serta peran pentingnya dalam memastikan validitas dan reliabilitas hasil penelitian.</p>
                                <a href="https://www.google.co.id/books/edition/Metode_Penelitian/Ntw_EAAAQBAJ?hl=id&gbpv=1&dq=metode+penelitian&printsec=frontcover" class="btn btn-primary btn-lihat">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img src="assets/img/datamining.jpeg" class="img-responsive" alt="Buku 2">
                            <div class="content">
                                <h4 class="title">Data Mining</h4>
                                <p class="text-muted">Dunia modern telah menjadikan data sebagai landasan dalam menyelesaikan berbagai persoalan yang dihadapi.</p>
                                <a href="https://www.google.co.id/books/edition/Data_Mining_Algoritma_dan_Implementasi/AtcCEAAAQBAJ?hl=id&gbpv=1&dq=data+mining&printsec=frontcover" class="btn btn-primary btn-lihat">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img src="assets/img/Algoritma.jpeg" class="img-responsive" alt="Buku 3">
                            <div class="content">
                                <h4 class="title">Algorithms to Live by</h4>
                                <p class="text-muted">mengeksplorasi bagaimana konsep dan prinsip algoritma dapat diterapkan dalam kehidupan sehari-hari.</p>
                                <a href="https://www.google.co.id/books/edition/Algorithms_to_Live_By/yvaLCgAAQBAJ?hl=id&gbpv=1&dq=algorithms+to+live+by&pg=PA6&printsec=frontcover" class="btn btn-primary btn-lihat">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img src="assets/img/onepiece.jpg" class="img-responsive" alt="Buku 4">
                            <div class="content">
                                <h4 class="title">One piece</h4>
                                <p class="text-muted">mengisahkan petualangan seorang bajak laut muda dan pemberani bernama Monkey D. Luffy dan krunya</p>
                                <a href="https://www.google.co.id/books/edition/ONE_PIECE_02/Dc3LDwAAQBAJ?hl=id&gbpv=1&dq=one+piece&printsec=frontcover" class="btn btn-primary btn-lihat">Lihat</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="card">
                            <img src="assets/img/programming.jpg" class="img-responsive" alt="Buku 5">
                            <div class="content">
                                <h4 class="title">Beginning Programming</h4>
                                <p class="text-muted">pengantar pemrograman, mengapa itu penting, dan bagaimana kode komputer bekerja untuk menyelesaikan masalah.</p>
                                <a href="https://www.google.co.id/books/edition/Beginning_Programming_For_Dummies/6hjjAOs4uGAC?hl=id&gbpv=1&dq=beginning+programming&pg=PA357&printsec=frontcover" class="btn btn-primary btn-lihat">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-custom">
            <div class="jam-operasional">
                <p><b>Jam Operasional:</b></p>
                <p><b>Senin - Kamis:</b></p>
                <p>Sesi 1: 08.00-10.00 WIB</p>
                <p>Sesi 2: 10.00-12.00 WIB</p>
                <p>Sesi 3: 12.00-15.00 WIB</p>

                <p><b>Jumat - Sabtu:</b></p>
                <p>Sesi 1: 08.00-11.00 WIB</p>
                <p>Sesi 2: 11.00-15.00 WIB</p>
            </div>
            <div class="catatan">
                <p><b>Catatan:</b></p>
                <p>Hanya yang menggunakan masker boleh memasuki area perpustakaan.</p>
                <p>Tidak dalam keadaan sakit/demam.</p>
                <p>Tetap menjaga jarak.</p>
                <p>Cuci tangan di tempat yang telah disediakan.</p>
            </div>
        </footer>


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

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Selamat datang di <b>Dashboard Perpustakaan</b>. Sebuah ruang tanpa buku bagaikan tubuh tanpa jiwa."

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>

</body>
</html>
