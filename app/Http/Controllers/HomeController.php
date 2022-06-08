<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kondisi= Auth::user()->name;
        if ($kondisi=='Kwarcab'){
        $getsiaga = Anggota::where('golongan_anggota','=','Siaga')->count();
        $getpenggalang = Anggota::where('golongan_anggota','=','Penggalang')->count();
        $getpenegak = Anggota::where('golongan_anggota','=','Penegak')->count();
        $getpandega = Anggota::where('golongan_anggota','=','Pandega')->count();
        $getpembina = Anggota::where('golongan_anggota','=','Pembina')->count();
        }else{
            $getsiaga = Anggota::where('golongan_anggota','=','Siaga')->where('ranting',$kondisi)->count();
            $getpenggalang = Anggota::where('golongan_anggota','=','Penggalang')->where('ranting',$kondisi)->count();
            $getpenegak = Anggota::where('golongan_anggota','=','Penegak')->where('ranting',$kondisi)->count();
            $getpandega = Anggota::where('golongan_anggota','=','Pandega')->where('ranting',$kondisi)->count();
            $getpembina = Anggota::where('golongan_anggota','=','Pembina')->where('ranting',$kondisi)->count();
            
        }
        
        return view('home',compact('getsiaga','getpenggalang','getpenegak','getpandega','getpembina'));
    }
}
