<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    public function exportPDF()
    {
        $data = $this->getData(); // Ambil data yang akan diexport
        $pdf = Pdf::loadView('pdf_view', compact('data'));
        return $pdf->download('laporan_kualitas_udara.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new DataExport, 'laporan_kualitas_udara.xlsx');
    }

    private function getData()
    {
        // Ambil data dari database atau sumber lain
        return [
            ['PM10', '54 µg/m³'],
            ['PM2.5', '35 µg/m³'],
            // Tambahkan data lainnya
        ];
    }
}
