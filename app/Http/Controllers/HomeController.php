<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

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
        $getsiaga = Anggota::where('tingkat','=','Siaga')->count();
        $getpenggalang = Anggota::where('tingkat','=','Penggalang')->count();
        $getpenegak = Anggota::where('tingkat','=','Penegak')->count();
        $getpandega = Anggota::where('tingkat','=','Pandega')->count();
        $getpembina = Anggota::where('tingkat','=','Pembina')->count();
        return view('home',compact('getsiaga','getpenggalang','getpenegak','getpandega','getpembina'));
    }
}
