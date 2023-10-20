<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Jtrain;
use App\Models\Pegawai;

use Alert;

class AssKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        return view("assesment-karyawan.pf_create");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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