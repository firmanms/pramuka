<?php

namespace App\Imports;

use App\Models\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class AnggotasImport implements ToModel, WithHeadingRow
{
    private $date_format = 'Y-m-d';
    private $date_columns = ['E'];
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
            'jenis_kelamin'    => $row['jenis_kelamin'],
            'tempat_lahir'    => $row['tempat_lahir'],
            'tgl_lahir'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tgl_lahir'])->format('Y-m-d'),
            'golongan_anggota'    => $row['golongan_anggota'],
            'golongan_anggotab'    => $row['golongan_anggotab'],
            'basis'    => $row['basis'],
            'no_gudep'    => $row['no_gudep'],
            'agama'    => $row['agama'],
            'goldar'    => $row['goldar'],
            'alamat'    => $row['alamat'],
            'ranting'    => $row['ranting'],
            // 'nta'    => $row['nta'], 
            // 'foto'    => $row['foto'],
        ]);
    }
}
