<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;

class DashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //siaga
        $getsiaga = Anggota::where('golongan_anggota','=','siaga')->count();
        $getsiagapta = Anggota::where('golongan_anggota','=','siaga')->where('jenis_kelamin','=','Laki-laki')->count();
        $getsiagapti = Anggota::where('golongan_anggota','=','siaga')->where('jenis_kelamin','=','Perempuan')->count();
        $getsiagamulapta = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','mula')->where('jenis_kelamin','=','Laki-laki')->count();
        $getsiagamulapti = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','mula')->where('jenis_kelamin','=','perempuan')->count();
        $getsiagabantupta = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','bantu')->where('jenis_kelamin','=','Laki-laki')->count();
        $getsiagabantupti = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','bantu')->where('jenis_kelamin','=','perempuan')->count();
        $getsiagatatapta = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','tata')->where('jenis_kelamin','=','Laki-laki')->count();
        $getsiagatatapti = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','tata')->where('jenis_kelamin','=','perempuan')->count();
        $getsiagagarudapta = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','Laki-laki')->count();
        $getsiagagarudapti = Anggota::where('golongan_anggota','=','siaga')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','perempuan')->count();
        //penggalang
        $getpenggalang = Anggota::where('golongan_anggota','=','penggalang')->count();
        $getpenggalangpta = Anggota::where('golongan_anggota','=','penggalang')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenggalangpti = Anggota::where('golongan_anggota','=','penggalang')->where('jenis_kelamin','=','Perempuan')->count();
        $getpenggalangramupta = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','ramu')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenggalangramupti = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','ramu')->where('jenis_kelamin','=','perempuan')->count();
        $getpenggalangrakitpta = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','rakit')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenggalangrakitpti = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','rakit')->where('jenis_kelamin','=','perempuan')->count();
        $getpenggalangterappta = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','terap')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenggalangterappti = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','terap')->where('jenis_kelamin','=','perempuan')->count();
        $getpenggalanggarudapta = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenggalanggarudapti = Anggota::where('golongan_anggota','=','penggalang')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','perempuan')->count();
        //penegak
        $getpenegak = Anggota::where('golongan_anggota','=','penegak')->count();
        $getpenegakpta = Anggota::where('golongan_anggota','=','penegak')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenegakpti = Anggota::where('golongan_anggota','=','penegak')->where('jenis_kelamin','=','Perempuan')->count();
        $getpenegakbantarapta = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','bantara')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenegakbantarapti = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','bantara')->where('jenis_kelamin','=','perempuan')->count();
        $getpenegaklaksanapta = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','laksana')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenegaklaksanapti = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','laksana')->where('jenis_kelamin','=','perempuan')->count();
        $getpenegakgarudapta = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpenegakgarudapti = Anggota::where('golongan_anggota','=','penegak')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','perempuan')->count();
        //pandega
        $getpandega = Anggota::where('golongan_anggota','=','pandega')->count();
        $getpandegapta = Anggota::where('golongan_anggota','=','pandega')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpandegapti = Anggota::where('golongan_anggota','=','pandega')->where('jenis_kelamin','=','Perempuan')->count();
        // $getpandegapta = Anggota::where('golongan_anggota','=','pandega')->where('golongan_anggotab','=','-')->where('jenis_kelamin','=','Laki-laki')->count();
        // $getpandegapti = Anggota::where('golongan_anggota','=','pandega')->where('golongan_anggotab','=','-')->where('jenis_kelamin','=','perempuan')->count();
        $getpandegagarudapta = Anggota::where('golongan_anggota','=','pandega')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpandegagarudapti = Anggota::where('golongan_anggota','=','pandega')->where('golongan_anggotab','=','garuda')->where('jenis_kelamin','=','perempuan')->count();

        //pembina
        $getpembina = Anggota::where('golongan_anggota','=','pembina')->count();
        $getpembinapta = Anggota::where('golongan_anggota','=','pembina')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpembinapti = Anggota::where('golongan_anggota','=','pembina')->where('jenis_kelamin','=','Perempuan')->count();
        $getpembinapta = Anggota::where('golongan_anggota','=','pembina')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpembinapti = Anggota::where('golongan_anggota','=','pembina')->where('jenis_kelamin','=','perempuan')->count();
        //pelatih
        $getpelatih = Anggota::where('golongan_anggota','=','pelatih')->count();
        $getpelatihpta = Anggota::where('golongan_anggota','=','pelatih')->where('jenis_kelamin','=','Laki-laki')->count();
        $getpelatihpti = Anggota::where('golongan_anggota','=','pelatih')->where('jenis_kelamin','=','perempuan')->count();
        //undef
        $getundef = Anggota::where('golongan_anggota','=','-')->count();
        $getundefpta = Anggota::where('golongan_anggota','=','-')->where('jenis_kelamin','=','Laki-laki')->count();
        $getundefpti = Anggota::where('golongan_anggota','=','-')->where('jenis_kelamin','=','perempuan')->count();
        //lainnya
        $gettot = Anggota::count();
        $gettotpta = Anggota::where('jenis_kelamin','=','Laki-laki')->count();
        $gettotpti = Anggota::where('jenis_kelamin','=','perempuan')->count();
        
        //dd($datasave);
        return view('welcome',compact
        ('getsiaga','getsiagapta','getsiagapti',
        'getpenggalangpta','getpenggalangpti',
        'getpenegakpta','getpenegakpti',
        'getpandegapta','getpandegapti',
        'getpembinapta','getpembinapti',
        'getsiagamulapta','getsiagamulapti',
        'getsiagabantupta','getsiagabantupti','getsiagatatapta','getsiagatatapti','getsiagagarudapta','getsiagagarudapti',
        'getpenggalang','getpenggalangramupta','getpenggalangramupti','getpenggalangrakitpta','getpenggalangrakitpti','getpenggalangterappta','getpenggalangterappti','getpenggalanggarudapta','getpenggalanggarudapti',
        'getpenegak','getpenegakbantarapta','getpenegakbantarapti','getpenegaklaksanapta','getpenegaklaksanapti','getpenegakgarudapta','getpenegakgarudapti',
        'getpandega','getpandegapta','getpandegapti','getpandegagarudapta','getpandegagarudapti',
        'getpembina','getpembinapta','getpembinapti',
        'getpelatih','getpelatihpta','getpelatihpti',
        'getundef','getundefpta','getundefpti',
        'gettot',
        'gettotpta',
        'gettotpti'));
            //->with('i', (request()->input('page', 1) - 1) * 5);
        //return view('home');
    }
    public function kwartir()
    {
       $getsiaga1 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Rancabali')->count();
       $getpenggalang1 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Rancabali')->count();
       $getpenegak1 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Rancabali')->count();
       $getpandega1 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Rancabali')->count();
       $getpembina1 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Rancabali')->count();
       $getsiaga2 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Ciwidey')->count();
       $getpenggalang2 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Ciwidey')->count();
       $getpenegak2 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Ciwidey')->count();
       $getpandega2 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Ciwidey')->count();
       $getpembina2 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Ciwidey')->count();
       $getsiaga3 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Pasirjambu')->count();
        $getpenggalang3 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Pasirjambu')->count();
        $getpenegak3 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Pasirjambu')->count();
        $getpandega3 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Pasirjambu')->count();
        $getpembina3 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Pasirjambu')->count();
        $getsiaga4 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Soreang')->count();
        $getpenggalang4 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Soreang')->count();
        $getpenegak4 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Soreang')->count();
        $getpandega4 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Soreang')->count();
        $getpembina4 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Soreang')->count();
        $getsiaga5 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cangkuang')->count();
        $getpenggalang5 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cangkuang')->count();
        $getpenegak5 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cangkuang')->count();
        $getpandega5 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cangkuang')->count();
        $getpembina5 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cangkuang')->count();
        $getsiaga6 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Pangalengan')->count();
        $getpenggalang6 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Pangalengan')->count();
        $getpenegak6 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Pangalengan')->count();
        $getpandega6 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Pangalengan')->count();
        $getpembina6 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Pangalengan')->count();
                $getsiaga7 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cimaung')->count();
        $getpenggalang7 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cimaung')->count();
        $getpenegak7 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cimaung')->count();
        $getpandega7 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cimaung')->count();
        $getpembina7 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cimaung')->count();
                $getsiaga8 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Banjaran')->count();
        $getpenggalang8 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Banjaran')->count();
        $getpenegak8 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Banjaran')->count();
        $getpandega8 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Banjaran')->count();
        $getpembina8 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Banjaran')->count();
                $getsiaga9 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Arjasari')->count();
        $getpenggalang9 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Arjasari')->count();
        $getpenegak9 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Arjasari')->count();
        $getpandega9 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Arjasari')->count();
        $getpembina9 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Arjasari')->count();
                $getsiaga10 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','PAMEUNGPEUK')->count();
        $getpenggalang10 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','PAMEUNGPEUK')->count();
        $getpenegak10 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','PAMEUNGPEUK')->count();
        $getpandega10 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','PAMEUNGPEUK')->count();
        $getpembina10 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','PAMEUNGPEUK')->count();
                $getsiaga11 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Baleendah')->count();
        $getpenggalang11 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Baleendah')->count();
        $getpenegak11 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Baleendah')->count();
        $getpandega11 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Baleendah')->count();
        $getpembina11 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Baleendah')->count();
                $getsiaga12 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Ciparay')->count();
        $getpenggalang12 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Ciparay')->count();
        $getpenegak12 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Ciparay')->count();
        $getpandega12 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Ciparay')->count();
        $getpembina12 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Ciparay')->count();
                $getsiaga13 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Pacet')->count();
        $getpenggalang13 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Pacet')->count();
        $getpenegak13 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Pacet')->count();
        $getpandega13 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Pacet')->count();
        $getpembina13 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Pacet')->count();
                $getsiaga14 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Kertasari')->count();
        $getpenggalang14 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Kertasari')->count();
        $getpenegak14 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Kertasari')->count();
        $getpandega14 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Kertasari')->count();
        $getpembina14 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Kertasari')->count();
                $getsiaga15 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Ibun')->count();
        $getpenggalang15 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Ibun')->count();
        $getpenegak15 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Ibun')->count();
        $getpandega15 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Ibun')->count();
        $getpembina15 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Ibun')->count();
                $getsiaga16 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Majalaya')->count();
        $getpenggalang16 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Majalaya')->count();
        $getpenegak16 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Majalaya')->count();
        $getpandega16 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Majalaya')->count();
        $getpembina16 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Majalaya')->count();
                $getsiaga17 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Paseh')->count();
        $getpenggalang17 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Paseh')->count();
        $getpenegak17 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Paseh')->count();
        $getpandega17 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Paseh')->count();
        $getpembina17 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Paseh')->count();
                $getsiaga18 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Solokanjeruk')->count();
        $getpenggalang18 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Solokanjeruk')->count();
        $getpenegak18 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Solokanjeruk')->count();
        $getpandega18 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Solokanjeruk')->count();
        $getpembina18 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Solokanjeruk')->count();
                $getsiaga19 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cikancung')->count();
        $getpenggalang19 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cikancung')->count();
        $getpenegak19 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cikancung')->count();
        $getpandega19 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cikancung')->count();
        $getpembina19 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cikancung')->count();
                $getsiaga20 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Nagreg')->count();
        $getpenggalang20 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Nagreg')->count();
        $getpenegak20 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Nagreg')->count();
        $getpandega20 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Nagreg')->count();
        $getpembina20 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Nagreg')->count();
                $getsiaga21 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cicalengka')->count();
        $getpenggalang21 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cicalengka')->count();
        $getpenegak21 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cicalengka')->count();
        $getpandega21 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cicalengka')->count();
        $getpembina21 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cicalengka')->count();
                $getsiaga22 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Rancaekek')->count();
        $getpenggalang22 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Rancaekek')->count();
        $getpenegak22 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Rancaekek')->count();
        $getpandega22 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Rancaekek')->count();
        $getpembina22 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Rancaekek')->count();
                $getsiaga23 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cileunyi')->count();
        $getpenggalang23 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cileunyi')->count();
        $getpenegak23 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cileunyi')->count();
        $getpandega23 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cileunyi')->count();
        $getpembina23 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cileunyi')->count();
                $getsiaga24 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cilengkrang')->count();
        $getpenggalang24 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cilengkrang')->count();
        $getpenegak24 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cilengkrang')->count();
        $getpandega24 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cilengkrang')->count();
        $getpembina24 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cilengkrang')->count();
                $getsiaga25 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Cimenyan')->count();
        $getpenggalang25 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Cimenyan')->count();
        $getpenegak25 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Cimenyan')->count();
        $getpandega25 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Cimenyan')->count();
        $getpembina25 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Cimenyan')->count();
                $getsiaga26 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Bojongsoang')->count();
        $getpenggalang26 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Bojongsoang')->count();
        $getpenegak26 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Bojongsoang')->count();
        $getpandega26 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Bojongsoang')->count();
        $getpembina26 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Bojongsoang')->count();
                $getsiaga27 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Dayeuhkolot')->count();
        $getpenggalang27 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Dayeuhkolot')->count();
        $getpenegak27 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Dayeuhkolot')->count();
        $getpandega27 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Dayeuhkolot')->count();
        $getpembina27 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Dayeuhkolot')->count();
                $getsiaga28 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Katapang')->count();
        $getpenggalang28 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Katapang')->count();
        $getpenegak28 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Katapang')->count();
        $getpandega28 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Katapang')->count();
        $getpembina28 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Katapang')->count();
                $getsiaga29 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Margahayu')->count();
        $getpenggalang29 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Margahayu')->count();
        $getpenegak29 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Margahayu')->count();
        $getpandega29 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Margahayu')->count();
        $getpembina29 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Margahayu')->count();
                $getsiaga30 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Margaasih')->count();
        $getpenggalang30 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Margaasih')->count();
        $getpenegak30 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Margaasih')->count();
        $getpandega30 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Margaasih')->count();
        $getpembina30 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Margaasih')->count();
                $getsiaga31 = Anggota::where('golongan_anggota','=','siaga')->where('ranting','=','Kutawaringin')->count();
        $getpenggalang31 = Anggota::where('golongan_anggota','=','penggalang')->where('ranting','=','Kutawaringin')->count();
        $getpenegak31 = Anggota::where('golongan_anggota','=','penegak')->where('ranting','=','Kutawaringin')->count();
        $getpandega31 = Anggota::where('golongan_anggota','=','pandega')->where('ranting','=','Kutawaringin')->count();
        $getpembina31 = Anggota::where('golongan_anggota','=','pembina')->where('ranting','=','Kutawaringin')->count();
        
        //dd($datasave);
        return view('kwartir',compact('getsiaga1','getpenggalang1','getpenegak1','getpandega1','getpembina1',
        'getsiaga2','getpenggalang2','getpenegak2','getpandega2','getpembina2',
        'getsiaga3','getpenggalang3','getpenegak3','getpandega3','getpembina3',
        'getsiaga4','getpenggalang4','getpenegak4','getpandega4','getpembina4',
        'getsiaga5','getpenggalang5','getpenegak5','getpandega5','getpembina5',
        'getsiaga6','getpenggalang6','getpenegak6','getpandega6','getpembina6',
        'getsiaga7','getpenggalang7','getpenegak7','getpandega7','getpembina7',
        'getsiaga8','getpenggalang8','getpenegak8','getpandega8','getpembina8',
        'getsiaga9','getpenggalang9','getpenegak9','getpandega9','getpembina9',
        'getsiaga10','getpenggalang10','getpenegak10','getpandega10','getpembina10',
        'getsiaga11','getpenggalang11','getpenegak11','getpandega11','getpembina11',
        'getsiaga12','getpenggalang12','getpenegak12','getpandega12','getpembina12',
        'getsiaga13','getpenggalang13','getpenegak13','getpandega13','getpembina13',
        'getsiaga14','getpenggalang14','getpenegak14','getpandega14','getpembina14',
        'getsiaga15','getpenggalang15','getpenegak15','getpandega15','getpembina15',
        'getsiaga16','getpenggalang16','getpenegak16','getpandega16','getpembina16',
        'getsiaga17','getpenggalang17','getpenegak17','getpandega17','getpembina17',
        'getsiaga18','getpenggalang18','getpenegak18','getpandega18','getpembina18',
        'getsiaga19','getpenggalang19','getpenegak19','getpandega19','getpembina19',
        'getsiaga20','getpenggalang20','getpenegak20','getpandega20','getpembina20',
        'getsiaga21','getpenggalang21','getpenegak21','getpandega21','getpembina21',
        'getsiaga22','getpenggalang22','getpenegak22','getpandega22','getpembina22',
        'getsiaga23','getpenggalang23','getpenegak23','getpandega23','getpembina23',
        'getsiaga24','getpenggalang24','getpenegak24','getpandega24','getpembina24',
        'getsiaga25','getpenggalang25','getpenegak25','getpandega25','getpembina25',
        'getsiaga26','getpenggalang26','getpenegak26','getpandega26','getpembina26',
        'getsiaga27','getpenggalang27','getpenegak27','getpandega27','getpembina27',
        'getsiaga28','getpenggalang28','getpenegak28','getpandega28','getpembina28',
        'getsiaga29','getpenggalang29','getpenegak29','getpandega29','getpembina29',
        'getsiaga30','getpenggalang30','getpenegak30','getpandega30','getpembina30',
        'getsiaga31','getpenggalang31','getpenegak31','getpandega31','getpembina31',
));
    }
    
    

    

}
