<?php

namespace App\Imports;

use App\Models\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggotasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Anggota([
            'nik'     => $row['nik'],
            'nama'    => $row['nama'],
            'tingkat'    => $row['tingkat'], 
            'ranting'    => $row['ranting'],
        ]);
    }
}
