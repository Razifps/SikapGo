<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <title>Monitoring Sensor Sikap</title>

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
</head>

<body>

    <div class="container" style="text-align: center; margin-top: 15px;">
        <img src="{{ ('images/logo.png') }}" style="width: 150px;">
        <h2>Sensor Realtime Sikap</h2>
    </div>
    <!-- Nilai Sensor Masuk -->
    <div class="container">
        <h2 style="margin-top: 15px;">Udara Masuk</h2>
        <div class="row">
            <!-- Kartu Pertama -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="text-align:center; background-color: red; color: whitesmoke;">MQ-135 (NO<sub>2</sub>) </h5>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold;">
                            <span id="no2_masuk">0</span>
                            <span>PPM</span>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Kartu Kedua -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="text-align:center; background-color: red; color: whitesmoke;">MQ-7 (CO)</h5>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold;">
                            <span id="co_masuk">0</span>
                            <span>PPM</span>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Nilai Sensor Keluar -->
    <div class="container">
        <h2 style="margin-top: 15px;">Udara Keluar</h2>
        <div class="row">
            <!-- Kartu Pertama -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="text-align:center; background-color: blue; color: whitesmoke;">MQ-135 (NO<sub>2</sub>) </h5>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold;">
                            <span id="no2_keluar">0</span>
                            <span>PPM</span>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Kartu Kedua -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="text-align:center; background-color:blue; color: whitesmoke;">MQ-7 (CO)</h5>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold;">
                            <span id="co_keluar">0</span>
                            <span>PPM</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="text-align:center; background-color:blue; color: whitesmoke;">Water</h5>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; font: size 70px; font-weight:bold;">
                            <span id="air">0</span>
                            <span>%</span>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>