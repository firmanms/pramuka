<?php

namespace App\Exports;

use App\Models\Anggota;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AnggotasExport implements FromView
{
    public function view(): View
    {
        $kondisi= Auth::user()->name;
        if ($kondisi=='KABUPATEN'){
             return view('exports.anggota', [
            'data' => Anggota::select('*')->get()
        ]);
        }else{
             return view('exports.anggota', [
            'data' => Anggota::select('*')->where('ranting',$kondisi)->get()
        ]);
        }
       
    }
    
    // public function map($invoice): array
    // {
    //     return [
            
    //         Anggota::dateTimeToExcel($invoice->tgl_lahir),
            
    //     ];
    // }
    
    // public function columnFormats(): array
    // {
    //     return [
    //         'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
    //     ];
    // }
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Anggota::all();
    // }
    
}
