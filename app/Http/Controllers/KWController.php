<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Alert;
class KWController extends Controller
{
    public function index()
    {
        return view("kw.create_pf");
    }
    public function store_train_krw(Request $request)
    {
        
        
        $this->validate($request, [
            "nip" => "required",
            "jenis" => "required",
            "tgl_sertif" => "required",
            "keterangan" => "required",
        ]);


        $data = new Training;
        $data->nip = $request->nip;
        $data->jenis = $request->jenis;
        $data->tgl_sertif = $request->tgl_sertif;
        $data->keterangan = $request->keterangan;
        $data->save();
        if ($data->save()) {
            Alert::success('Success', 'Data Berhasil Di Tambah!');
            return redirect('/assesment-jt');
        }

    }
}
