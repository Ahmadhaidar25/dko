<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_model1;
use App\Models\data_model2;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function tahap1()
    {
        return view('tahap1');
    }

  
    public function tahap2()
    {
      return view('tahap2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //dd($request->all());
        // $nm = $request->berkas_bpjs;
        //$namaFile = $nm->getClientOriginalName();

        $nm = $request->unggah_poto;
        $namaFile = $nm->getClientOriginalName();

 
        $data = new data_model1;
        $data->nama_peserta = $request->nama_peserta;
        $data->jk = $request->jk;
        $data->thn_lahir = $request->thn_lahir;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->wilayah = $request->wilayah;
        $data->no_tlp = $request->no_tlp;
        $data->setatus = $request->setatus;
        $data->tgl_kecelakaan = $request->tgl_kecelakaan;
        $data->tempat_kejadian = $request->tempat_kejadian;
        $data->unsur_penyebab = $request->unsur_penyebab;
        $data->uraian_kecelakaan = $request->uraian_kecelakaan;
        $data->skd = $request->skd;
        //$data->$namaFile;
        $data->unggah_poto=$namaFile;
        $data->email = $request->email;

        
        $nm->move(public_path().'/poto', $namaFile);
        $data->save();
        return back()->with('success', 'Data Terkirim :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $nm = $request->file_bpjs;
        $namaFile = $nm->getClientOriginalName();

        $data = new data_model2;
        $data->nama_peserta = $request->nama_peserta;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->jk = $request->jk;
        $data->skd = $request->skd;
        $data->file_bpjs = $namaFile;
        
        $nm->move(public_path().'/file_bpjs', $namaFile);
        $data->save();
        return back()->with('success', 'Data Terkirim :)');
    }

    
}
