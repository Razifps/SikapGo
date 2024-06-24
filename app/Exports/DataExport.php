<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;


class DataExport implements FromCollection, WithHeadings
{
    /**
     * Mengembalikan koleksi data yang akan diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        // Ambil data yang sama seperti di PDF
        return collect([
            ['PM10', '54 µg/m³'],
            ['PM2.5', '35 µg/m³'],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }

    /**
     * Mengembalikan heading dari kolom.
     *
     * @return array
     */
    public function headings(): array
    {
        return ['Polutan', 'Konsentrasi'];
    }
}
