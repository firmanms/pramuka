<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AnggotasExport;
use App\Imports\AnggotasImport;
use App\Models\Anggota;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:anggota-list|anggota-create|anggota-edit|anggota-delete', ['only' => ['index','store']]);
         $this->middleware('permission:anggota-create', ['only' => ['create','store']]);
         $this->middleware('permission:anggota-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:anggota-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $kondisi= Auth::user()->name;
        if ($kondisi=='KABUPATEN'){
            $data = Anggota::select('*')->get();
        }else{
            $data = Anggota::select('*')->where('ranting',$kondisi)->get();
        }
        if ($request->ajax()) {

            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function(Anggota $anggota){
                    $actionBtn = '<button ' . ' class="btn btn-outline-warning btn-sm" ' . ' onclick="ubah(' . $anggota->id . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                      </svg>' .
                                    '</button>
                                    

                    <button ' .
                                        ' class="btn btn-outline-info btn-sm" ' .
                                        ' onclick="showProject(' . $anggota->id . ')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>' .
                                    '</button>
                                    

                        <a href="javascript:void(0)" class="btn btn-outline-danger btn-sm" title="Hapus User" onclick="hapus('.$anggota->id.')" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a>
<a href="anggotas/resume/'.$anggota->id.'" class="btn btn-outline-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
							<path d="M15.475,6.692l-4.084-4.083C11.32,2.538,11.223,2.5,11.125,2.5h-6c-0.413,0-0.75,0.337-0.75,0.75v13.5c0,0.412,0.337,0.75,0.75,0.75h9.75c0.412,0,0.75-0.338,0.75-0.75V6.94C15.609,6.839,15.554,6.771,15.475,6.692 M11.5,3.779l2.843,2.846H11.5V3.779z M14.875,16.75h-9.75V3.25h5.625V7c0,0.206,0.168,0.375,0.375,0.375h3.75V16.75z"></path>
						</svg></a>
 
';
                        return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $AnggotaId = $request->id;
 
        $anggota   =   Anggota::updateOrCreate(
                    [
                     'id' => $AnggotaId
                    ],
                    [
                    'nama' => $request->nama, 
                    'nik' => $request->nik,                    
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'golongan_anggota' => $request->golongan_anggota,
                    'golongan_anggotab' => $request->golongan_anggotab,
                    'basis' => $request->basis,
                    'no_gudep' => $request->no_gudep,
                    'agama' => $request->agama,
                    'goldar' => $request->goldar,
                    'alamat' => $request->alamat,
                    'ranting' => $request->ranting,
                    'nta' => $request->nta
                    ]);    
                         
        return Response()->json($anggota);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::where('id',$id)->first();
        return response()->json(['anggota'=>$anggota]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::where('id',$id)->first();
        return response()->json(['anggota'=>$anggota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anggota::find($id)->delete();
        return response()->json(['type' => 'success', 'message' => 'Berhasil Dihapus'],200);
    }
    public function destroyall($id)
    {
        Anggota::where('ranting',$id)->delete();
        return response()->json(['type' => 'success', 'message' => 'Berhasil Dihapus'],200);
        
    }

    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new AnggotasExport, 'anggota.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new AnggotasImport,request()->file('file'));

        return back();
    }
    public function resume($id)
    {
        
        $profil = Anggota::where('id',$id)->first();
        //dd($datasave);
        return view('resume',compact('profil'));
            //->with('i', (request()->input('page', 1) - 1) * 5);
        //return view('home');
    }
}
