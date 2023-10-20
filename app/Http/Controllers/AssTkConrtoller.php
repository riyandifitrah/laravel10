<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pkary;
use Illuminate\Http\Request;
use Alert;

class AssTkConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("assesment-tk.create_tk");
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
    public function store_tk(Request $request)
    {

        $this->validate($request, [
            "nip" => "required",
            "nama_karyawan" => "required",
            "jabatan" => "required",
        ]);
        // dd($request->all());

        $pegawai = new Pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->nama_karyawan = $request->nama_karyawan;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->save();

        // Simpan data ke tabel Pkaries
        $pkaries = new Pkary;
        $pkaries->nip = $request->nip;
        $pkaries->nama_karyawan = $request->nama_karyawan;
        $pkaries->jabatan = $request->jabatan;
        // Tambahkan kolom-kolom lain yang sesuai di sini
        $pkaries->save();

        if ($pegawai->save() && $pkaries->save()) {
            Alert::success('Success', 'Data Berhasil Ditambahkan!');
            return redirect('/assesment-tk');
        }
    }

    /**p
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
