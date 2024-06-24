<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('images/logo1.png') }}" />

    <!-- Webpage Title -->

    <title>Official Website Sikap</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Petrona:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://arkeocode.com/assets/css/custom.css" />

    <!-- Panggil Jquery Untuk realtime -->
    <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>


    <!-- Ajax untuk Realtime -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#no2_masuk").load("{{url('baca_sensor')}} #no2_masuk_0");
                $("#co_masuk").load("{{url('baca_sensor')}} #co_masuk_0");
                $("#no2_keluar").load("{{url('baca_sensor')}} #no2_keluar_0");
                $("#co_keluar").load("{{url('baca_sensor')}} #co_keluar_0");
            }, 1000); //1000Ms = 1 detik

        });
    </script>



    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />


    <style>
        body {
            font-family: 'Exo', sans-serif;
        }

        .header {
            position: relative;
            /* Membuat elemen parent untuk pseudo-elemen */
            background-image: url('images/bg2.jpeg');
            /* Ganti dengan path gambar yang diunggah */
            background-size: cover;
            background-position: center;
            padding: 10px;
            color: white;
            /* Sesuaikan warna teks jika diperlukan */
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            /* Hitam dengan transparansi 50% */
            /* Anda dapat mengubah warna dan tingkat transparansi sesuai kebutuhan */
            z-index: 0;
        }

        .header .text-container {
            position: relative;
            /* Membuat elemen di atas pseudo-elemen */
            z-index: 1;
        }

        .header h1,
        .header p {
            color: white;

        }

        /* Button */
        .btn-lg a {
            text-decoration: none;
            color: white;
            background-color: white;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .btn-lg {
            background-color: white;
            padding: 10px 25px;
            border-radius: 5px;
        }

        .btn-lg a {
            text-decoration: none;
            color: black;
            display: inline-block;
        }

        /* Table */
        .modern-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            color: #009879;
        }

        .modern-table thead tr {
            background-color: #009879;
            color: #009879;
            text-align: center;
        }

        .modern-table th,
        .modern-table td {
            padding: 12px 15px;
        }

        .modern-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .modern-table tbody tr:nth-of-type(even) {
            background-color: #009879;
        }

        .modern-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .modern-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        /* Rounded Table */
        .rounded-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
            overflow: hidden;
            /* Ensures border-radius is visible */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Adds shadow for aesthetics */
        }

        .rounded-table thead th {
            background-color: #009879;
            /* Header table color */
            color: white;
            text-align: left;
            padding: 12px 15px;
        }

        .rounded-table tbody td {
            background-color: #ffffff;
            padding: 12px 15px;
            border-top: 1px solid #dddddd;
        }

        .rounded-table tbody tr:last-child td {
            border-bottom: none;
        }

        .benefits {
            background: rgb(1, 18, 22);
            background: linear-gradient(9deg, rgba(1, 18, 22, 1) 15%, rgba(30, 48, 51, 1) 42%, rgba(58, 88, 94, 1) 93%);
            border-bottom: 1px solid #dee2e6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .card {
            width: 200px;
            /* Adjust the width as needed */
            margin: 20px auto;
            /* Center the card and add space at the bottom */
        }

        .card-body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            /* Adjust the height as needed */
        }

        .card-title {
            font-size: 30px;
            /* Adjust the font size as needed */
            font-weight: bold;
        }

        .services {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            /* Adjust this value as needed */
        }
    </style>


<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg position-static navbar-dark" aria-label="Main navigation" style="background: rgb(1,18,22); background: linear-gradient(9deg, rgba(1,18,22,1) 15%, rgba(30,48,51,1) 42%, rgba(58,88,94,1) 93%); border-bottom: 0px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
        <div class="container-fluid">
            <!-- Image Logo -->
            <a class="navbar-brand logo-image"><img src="{{ asset('images/sikap_full1.png') }}" style="width: 240px; height: 70px; margin-bottom: -4px;"></a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#header">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#information">Information</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#team">Team</a></li>
                        <li>
                            @guest
                            <form id="login-form" action="{{ route('login') }}" method="GET">
                                @csrf
                                <button type="submit" class="nav-link px-lg-3 py-3 py-lg-4">
                                    <a class="text-white">Login</a>
                                </button>
                            </form>
                            @endguest

                            @if (Auth::check())
                        <li>
                            <a href="{{ route('report') }}" class="nav-link px-lg-3 py-3 py-lg-4 text-white">Admin</a>
                        </li>
                        @else

                        @endif

                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div id=" link-header">
    </div>
    <header id="header" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8" id="text-query-left">
                    <div class="text-container">
                        <h1>
                            <img src="{{ asset('images/logo1.png') }}" style="width: 100px; height: 90px; margin-bottom: 8px;">
                            <b>Official Website Sikap</b>
                        </h1>
                        <p>
                            Welcome to the official page of air quality research and air pollution reduction efforts initiated by students from Mercu Buana University in collaboration with the West Jakarta Environmental Agency.
                            Through this collaboration, we are committed to creating a healthier and more sustainable environment for the people of West Jakarta.
                        </p>
                        <button class="btn-lg">
                            <a href="#information">Explore</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end of header -->

    <!-- start of Clients -->
    <section class="clients" id="clients">
        <div class="container" style="color: #F0F5FF">
            <div class=" row">
                <div class="col-lg-12">
                    <div class="row" style="background: rgb(1,18,22); background: linear-gradient(9deg, rgba(1,18,22,1) 15%, rgba(30,48,51,1) 42%, rgba(58,88,94,1) 93%); border-bottom: 0px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
                    </div>
                </div>
                <div class="row img-wrap">
                </div>
                <div class="row" style="background: rgb(1,18,22); background: linear-gradient(9deg, rgba(1,18,22,1) 15%, rgba(30,48,51,1) 42%, rgba(58,88,94,1) 93%); border-bottom: 0px solid #dee2e6; box-shadow: 3 2px 4px rgba(0,0,0,0.15);">
                    <div class="container-fluid col-lg-5">
                        <div class="col-12">
                            <div class="text-heading text-center">
                                <h2 style="color: #dddddd">COLLABORATION</h2>
                            </div>

                            <div class="text-desc" style="text-justify: auto;">
                                <p>We are proud to announce the collaboration between Mercu Buana University and the Environmental Agency in the development and implementation of the Aerosol Cleaner Control System (SIKAP).
                                    This partnership aims to improve outdoor air quality by using the latest technology in filtration and ionization to reduce harmful particles such as dust, pollen, and microorganisms. Through this synergy, we hope to create a healthier and cleaner environment for the community.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block rounded-3">
                        <img class="rounded-3" style="width: 200px; background-color:#dddddd; " src="{{ asset('images/mercu.png') }}">

                    </div>
                </div>
            </div>
    </section>
    <!-- end of Clients -->

    <!-- start of vision & mission (Home)-->
    <section class=" vision" id="vision" style="color: #F0F5FF">
        <div class="row">
            <img src=" {{ asset('images/sikap.png') }}" class="img-fluid mb-4">
            <div class="text-container col-lg-6">
                <div class="text-content">
                    <h2 style="color: #23373A">Vision</h2>
                    <p style="color: #23373A">
                        “Transforming the world into a cleaner and healthier place through digital transformation.”
                    </p>
                </div>
                <div class="text-content">
                    <h2 style="color: #23373A;">Mission</h2>
                    <ul style="color: #23373A;">
                        <li> Monitoring: Using advanced technology to monitor air quality in real-time.</li>
                        <li> Integrated Data Analysis: Gathering and analyzing pollution data to provide valuable insights.</li>
                        <li> Data-Driven Solutions: Developing strategies and solutions based on data to reduce pollutant emissions.</li>
                        <li> Empowerment: Increasing awareness and community participation in maintaining air quality. Technology for a Cleaner Future</li>
                    </ul>
                </div>
                <div class="text-content">
                    <h2 style="color: #23373A">Value</h2>
                    <p style="color: #23373A">
                        “Presenting product who can give benefits for
                        audience busy and work together on projects that are
                        mutually beneficial to all part.”
                    </p>
                </div>
            </div>
    </section>
    <!-- end of vision & mission -->

    <!-- start of Benefits (Air Quality) -->
    <section class="information" id="information">
        <!-- Informasi Sensor -->
        <div class="container" style="background: linear-gradient(9deg, rgba(1,18,22,1) 15%, rgba(30,48,51,1) 42%, rgba(58,88,94,1) 93%); border-bottom: 0px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
            <div class="row">
                <!-- Kartu Pertama -->
                <h2 style="text-align:center;  margin-top : 50px; color:#dee2e6; ">INFORMATION</h2>
                <div class="col-md-6">
                    <h2 style="margin-top: 20px; text-align: center; color:#dee2e6; ">POLLUTED AIR </h2>
                    <div class="row">
                        <!-- MQ135 NO2 Masuk -->
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(9deg, rgba(139,10,10,1) 15%, rgba(171,35,35,1) 42%, rgba(191,45,45,1) 93%); color: white;">
                                <h5 class="card-header" style="text-align: center;">MQ-135 (NO<sub>2</sub>)</h5>
                                <div class="card-body">
                                    <h2 class="card-title" style="margin-top: 20px;">
                                        <span id="concentrationNO2_1">0</span>
                                        <span>PPM</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- MQ7 CO Masuk -->
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(180deg, rgba(10,60,139,1) 8%, rgba(0,86,255,1) 52%, rgba(2,41,112,1) 88%); color: white;">
                                <h5 class="card-header" style="text-align: center;">MQ-7 (CO)</h5>
                                <div class="card-body">
                                    <h2 class="card-title" style="margin-top: 20px;">
                                        <span id="concentrationCO1">0</span>
                                        <span>PPM</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nilai Sensor Keluar -->
                <div class="col-md-6">
                    <h2 style="margin-top: 20px; text-align: center; color:#dee2e6;">FILTERED AIR</h2>
                    <div class="row">
                        <!-- MQ135 NO2 Keluar -->
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(9deg, rgba(139,10,10,1) 15%, rgba(171,35,35,1) 42%, rgba(191,45,45,1) 93%); color: white;">
                                <h5 class="card-header" style="text-align: center;">MQ-135 (NO<sub>2</sub>)</h5>
                                <div class="card-body">
                                    <h2 class="card-title" style="margin-top: 20px;">
                                        <span id="concentrationNO2_2">0</span>
                                        <span>PPM</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- MQ7 CO Keluar -->
                        <div class=" col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(180deg, rgba(10,60,139,1) 8%, rgba(0,86,255,1) 52%, rgba(2,41,112,1) 88%); color: white;">
                                <h5 class="card-header" style="text-align: center;">MQ-7 (CO)</h5>
                                <div class="card-body">
                                    <h2 class="card-title" style="margin-top: 20px;">
                                        <span id="concentrationCO2">0</span>
                                        <span>PPM</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- end of card -->
    <!-- end of Benefits -->

    <!-- start of Team (Details) -->
    <section class="team" id="team" style="text-align: center;">
        <img src="{{ asset('images/team.png') }}" class="img-fluid" style="margin-top: 5px; width: 820px; height: 470px;">
    </section>

    <!-- end of Service -->




    <!-- Footer Start -->
    <footer class="container-fluid footer" id="footer">
        <div class="container pt-5 pb-4">
            <div class="row">

                <div class="email-container col-lg-5 col-sm-12">
                    <a href="#" class="footer-logo">
                        <img src="{{ asset('images/sikap_full.png') }}" style="width: 240px; height: 70px;" />
                    </a>
                    <div class="input-desc">
                        <input type="text" class="form-control" placeholder="Your email" />
                        <button class="btn btn-connect">Connect</button>
                    </div>
                </div>


                <div class="desc-container d-md-flex col-lg-5 d-lg-flex">
                    <div class="top-desc-xs left-desc col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa-brands fa-instagram"></i>Sikapgo.id</li>
                            <li class="list-group-item">
                                www.sikapgo.site
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-desc-xs right-desc col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Jl. Raya, RT.4/RW.1, Meruya Sel. Kec. Kembangan, Jakarta, Daerah Khusus Ibukota Jakarta 11650,
                                Kec. Kembangan, Jakarta,Kec. Kembangan, DKI Jakarta 11630
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="copyright">
                    <span>2024 SIKAP Monitoring System</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('images/sikap_full1.png') }}" alt="alternative" />
    </button>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-storage.js"></script>
    <!-- end of back to top button -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>

    <script>
        const firebaseConfig = {
            apiKey: "AIzaSyBtiZPtt9PM2vTXFYae0xLPLAIAdNLvPZs",
            authDomain: "sikapgo-336a9.firebaseapp.com",
            databaseURL: "https://sikapgo-336a9-default-rtdb.firebaseio.com",
            projectId: "sikapgo-336a9",
            storageBucket: "sikapgo-336a9.appspot.com",
            messagingSenderId: "445949035047",
            appId: "1:445949035047:web:ca07b63111e8b7796bc402",
            measurementId: "G-W312SH2WHZ"
        };

        // Inisialisasi Firebase dan database
        firebase.initializeApp(firebaseConfig);
        var database = firebase.database();

        // Mendapatkan data monitoring dari Firebase
        const databaseMonitoring = firebase.database().ref("Data/Monitoring");
        databaseMonitoring.on("value", (snapshot) => {
            const data = snapshot.val();

            // Update nilai konsentrasi CO dan NO2 pada halaman
            document.getElementById("concentrationCO1").textContent = data.concentrationCO1;
            document.getElementById("concentrationCO2").textContent = data.concentrationCO2;
            document.getElementById("concentrationNO2_2").textContent = data.concentrationNO2_2;
            document.getElementById("concentrationNO2_1").textContent = data.concentrationNO2_1;
            document.getElementById("waterLevelPercent").textContent = data.waterLevelPercent;

            // Membuat if else condition untuk menentukan apakah udara sehat atau tidak berdasarkan konsentrasi CO dan NO2
            // Klasifikasi jenis udara berdasarkan konsentrasi CO dan NO2
            let airQuality = "";
            if (data.concentrationCO1 <= 5 && data.concentrationNO2_1 <= 10) {
                airQuality = "Udara Sehat";
            } else if (data.concentrationCO1 <= 10 && data.concentrationNO2_1 <= 20) {
                airQuality = "Udara Sedang";
            } else {
                airQuality = "Udara Tidak Sehat";
            }

            // Menampilkan jenis udara ke konsol
            console.log("Jenis Udara: " + airQuality);
        });
    </script>

    <!-- Bootstrap framework -->
    <script src="https://sikapgo.com/assets/js/landing-page/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{ asset('js/purecounter.min.js') }}"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="https://arkeocode.com/assets/js/landing-page/isotope.pkgd.min.js"></script>
    <!-- Isotope for filter -->
    <script src="https://arkeocode.com/assets/js/landing-page/scripts.js"></script>
    <!-- Custom scripts -->

</body>

</html>