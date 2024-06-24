<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Anda bisa menambahkan logika untuk menampilkan laporan di sini
        return view('report'); // Pastikan Anda memiliki view yang sesuai
    }
}
