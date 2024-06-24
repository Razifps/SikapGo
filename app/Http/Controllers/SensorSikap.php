<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msensor;
use Illuminate\Support\Facades\Log;

class SensorSikap extends Controller
{
    public function index()
    {
        // Your monitoring logic here
        return view('monitoring'); // Assuming you have a monitoring blade file
    }

    public function GetData(Request $request)
    {
        dd($request->co1);
        dd($request->co1);
        dd($request->co1);
        dd($request->co1);
        dd($request->co1);
        // $sensor = Msensor::select('NO2_Masuk', 'CO_Masuk', 'NO2_Keluar', 'CO_Keluar', 'Air')->get();
        // return response()->json($sensor);
    }

    public function baca_sensor(Request $request)
    {
        dd($request->all());
        // Baca tb_sensor dengan kolom tertentu

        $sensor = Msensor::select('NO2_Masuk', 'CO_Masuk', 'NO2_Keluar', 'CO_Keluar', 'Air')->get();
        Log::info($sensor); // Tambahkan log untuk debugging
        return view('baca_sensor', ['nilaisensor' => $sensor]);
    }

    public function simpansensor()
    {
        Msensor::where('id', '1')->update(['NO2_Masuk' => request()->nilaisensor]);
    }
}
