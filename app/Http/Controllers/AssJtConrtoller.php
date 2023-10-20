<?php

namespace App\Http\Controllers;

use App\Models\Jtrain;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
Use Alert;

class AssJtConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("assesment-jt.create_jt");
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
    public function store_jenis_training(Request $request)
    {
        if ($request->has('simpan')) {
            $this->validate($request,[
                "jenis"=> "required",
                "keterangan"=> "required",
            ]);
        }
        
        // dd($request->all());
        $data = new Jtrain;
        $data->jenis = $request->jenis;
        $data->keterangan = $request->keterangan;
        $data->save();
        if($data->save()){
            Alert::success('Success', 'Data Berhasil Di Tambah!');
            return redirect('/assesment-jt');
        }
        // return response()->json([
        //     'success' => 'Data berhasil disimpan.',
        //     'antrian_id' => $data,
        // ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
