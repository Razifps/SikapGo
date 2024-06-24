<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorController extends Controller
{
    public function store(Request $request)
    {
        // Ambil data dari request
        $data = $request->all();

        // Simpan data ke dalam database
        SensorData::create($data);

        return response()->json(['message' => 'Data received successfully']);
    }
}
