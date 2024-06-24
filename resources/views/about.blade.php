<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Official Website Sikap</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            font-family: 'Exo', sans-serif;
        }

        .table-responsive table {
            width: 100%;
            /* Atur lebar tabel */
        }

        .table-responsive th,
        .table-responsive td {
            width: 50%;
            /* Atur lebar kolom */
        }

        .detail-box {
            border: 1px solid #ccc;
            /* Tambahkan border dengan ketebalan 1px dan warna abu-abu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow yang sudah ada */
            padding: 16px;
            /* Padding yang sudah ada */
            background-color: white;
            /* Warna latar belakang yang sudah ada */
            border-radius: 8px;
            /* Radius border yang sudah ada */
        }
    </style>
</head>

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;" id="mainNav">
        <div class="container px-4 px-lg-5">
            <img src="{{ asset('images/logo.png') }}" style="width: 80px; height: 80px; margin-bottom: 8px;">
            <div class="site-heading">
                <h1>Official Website SIKAP </h1>
                <h4 style=" margin-top: -15px;">System Control Aerosol Purifier</h4>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('landing_page')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('details')}}">Details</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin_dashboard')}}">Login</a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('images/bg1.jpeg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <section>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">

                <section class="device-info-section" style="margin-top: 50px;"> <!-- Tambahkan margin-top di sini -->
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-7">
                                <div class="detail-box shadow p-3 mb-5 bg-white rounded text-center">
                                    <img src="{{ asset('images/Device.png') }}" class="img-fluid mb-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main-content">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center margin-">
                            <div class="col-md-10 col-lg-8 col-xl-7">
                                <!-- Card for Device Details -->
                                <div class="detail-box shadow p-3 mb-5 bg-white rounded">
                                    <h2 class="section-heading text-center">Detail Alat SIKAP</h2>
                                    <p>SIKAP (System Control Aerosol Purifier) adalah sebuah sistem purifikasi aerosol yang dirancang untuk meningkatkan kualitas udara dalam ruangan. Alat ini menggunakan teknologi filtrasi dan ionisasi terkini untuk mengurangi partikel berbahaya di udara seperti debu, polen, dan mikroorganisme.</p>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Footer -->
                <!-- <footer class="border-bottom" style="background-color: #e3f2fd;">
                    <div class="container px-5 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-7">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item">
                                        <a href="#!">
                                            <span class="fa-stack fa-lg">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#!">
                                            <span class="fa-stack fa-lg">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#!">
                                            <span class="fa-stack fa-lg">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2024</div>
                            </div>
                        </div>
                    </div>
                </footer> -->
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
</body>

</html>