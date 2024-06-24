<!doctype html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                $("#air").load("{{url('baca_sensor')}} #air_0");
            }, 1000); //1000Ms = 1 detik

        });
    </script>
    <style>
        body .list-group-item-action:hover {
            background-color: #f8f9fa;
            /* Warna latar belakang saat hover */
            color: #495057;
            /* Warna teks saat hover */
            transition: background-color 0.3s, color 0.3s;
            /* Transisi halus */
        }

        .table-custom {
            background-color: #f2f2f2;
            /* Warna latar belakang tabel */
            color: #333;
            /* Warna teks tabel */
        }

        .table-custom thead {
            background-color: #666;
            /* Warna latar belakang header tabel */
            color: #fff;
            /* Warna teks header tabel */
        }

        .table-custom tbody tr:hover {
            background-color: #c8e6c9;
            /* Warna latar belakang baris saat hover */
        }

        .card-same-height {
            height: 100%;
            /* Mengatur tinggi card agar sama */
        }

        .container {
            margin: 20px auto;
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
</head>

<body>
    <!-- Header -->
    <header class="text-white text-center py-3" style="background: rgb(1,18,22); background: linear-gradient(9deg, rgba(1,18,22,1) 15%, rgba(30,48,51,1) 42%, rgba(58,88,94,1) 93%); border-bottom: 1px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
        <img src="{{ asset('images/sikapad1.png') }}" style="height: 150px;">

    </header>

    <!-- Sidebar and Page Content -->
    <div class="d-flex">
        <nav id="sidebar-wrapper" class="bg-light border-right" style="min-height: 100vh; min-width: 200px; border-right: 1px solid #dee2e6; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <div class="list-group list-group-flush">
                <a href="{{ route('profile') }}" class="btn btn-light text-dark" style="border-bottom: 1px solid #dee2e6;"><i class="fas fa-home"></i> Home</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light text-dark" style="width: 100%; border-bottom: 1px solid #dee2e6;">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </nav>
        <!-- Informasi Sensor -->
        <div class="container">
            <div class="row">
                <!-- Kartu Pertama -->
                <div class="col-md-6">
                    <h2 style="margin-top: 10px; text-align: center;">UDARA MASUK</h2>
                    <div class="row">
                        <!-- MQ135 NO2 Masuk -->
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(9deg, rgba(139,10,10,1) 15%, rgba(171,35,35,1) 42%, rgba(191,45,45,1) 93%); color: white;">
                                <h5 class="card-header">MQ-135 (NO<sub>2</sub>)</h5>
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
                                <h5 class="card-header">MQ-7 (CO)</h5>
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
                    <h2 style="margin-top: 20px; text-align: center;">UDARA KELUAR</h2>
                    <div class="row">
                        <!-- MQ135 NO2 Keluar -->
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card rounded-3" style="background: linear-gradient(9deg, rgba(139,10,10,1) 15%, rgba(171,35,35,1) 42%, rgba(191,45,45,1) 93%); color: white;">
                                <h5 class="card-header">MQ-135 (NO<sub>2</sub>)</h5>
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
                                <h5 class="card-header">MQ-7 (CO)</h5>
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
                <!-- Water Level -->
                <div class="container">
                    <h2 style="margin-top: 20px; text-align: center;">Water Level</h2>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">

                            <div class="col-md-12 text-align:center;">
                                <div class="card" style="margin-top: 20px;">
                                    <h5 class="card-header" style="text-align:center;">Water</h5>
                                    <div class="card-body">
                                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold; margin-top: 20px;">
                                            <span id="waterLevelPercent">0</span>
                                            <span>%</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="container">
                    <table class="table table-bordered table-hover nowrap" id="data-table">
                        <thead>
                            <tr class="table" id="theader">
                                <th>Tanggal</th>
                                <th>CO Masuk</th>
                                <th>CO Keluar</th>
                                <th>NO2 Keluar</th>
                                <th>NO2 Masuk</th>
                                <th>Water Level</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Water Sensor -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.2/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/fc-5.0.0/fh-4.0.1/r-3.0.0/sc-2.4.1/datatables.min.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-storage.js"></script>

            <script>
                // Setting Data Table
                $(document).ready(function() {
                    var table;
                    table = $('#data-table').DataTable({
                        order: [
                            [0, 'desc']
                        ],
                        language: {
                            search: '<i class="fa-solid fa-magnifying-glass"></i>',
                            info: 'Menampilkan 10 dari _TOTAL_ data' // Menggunakan ikon pencarian Font Awesome sebagai label pencarian
                        },
                        layout: {
                            topStart: {
                                buttons: ['excelHtml5', 'pdfHtml5']
                            }
                        }
                    });
                    $('#btnExcel').on('click', function() {
                        table.button('.buttons-excel').trigger();
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Ekspor Excel Berhasil",
                            showConfirmButton: false,
                        })
                    })
                    $('#btnCsv').on('click', function() {
                        table.button('.buttons-csv').trigger();
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Ekspor CSV Berhasil",
                            showConfirmButton: false,
                        })
                    })
                    $('#btnPDF').on('click', function() {
                        table.button('.buttons-pdf').trigger();
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Ekspor PDF Berhasil",
                            showConfirmButton: false,
                        })
                    })

                    $('#btnPrint').on('click', function() {
                        table.button('.buttons-print').trigger();
                    })

                });
            </script>
            <!-- Scripts -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('style/js/apps.js') }}"></script>



</body>

</html>