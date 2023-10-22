<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Pkary;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use Alert;
class PegawaiController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            // $data = DB::table('pegawais')
            // ->select('pegawais.id','pegawais.nip', 'pegawais.nama_karyawan', 'pegawais.jabatan')
            // ->get();
            $data=Pegawai::select('pegawais.id','pegawais.nip', 'pegawais.nama_karyawan', 'trainings.jenis', 'trainings.tgl_sertif')
            ->leftJoin('trainings', 'pegawais.id', '=', 'trainings.id')
            ->leftJoin('jtrains', 'trainings.jenis', '=', 'jtrains.id')
            ->get();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a href="'.route('destroy.pegawai', ['id' => $row->id]).'" class="delete btn btn-danger btn-sm">Hapus 
                    </a>
                    ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view("karyawan.index_karyawan", [

        ]);
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
    public function store(Request $request)
    {

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
        $destroy = Pegawai::findOrFail($id);
        if ($destroy) {
            $destroy->delete();
            Alert::success('Success', 'Data Berhasil Dihapus!');
            return redirect('/');
        } else {
            Alert::error('Error', 'Gagal menghapus data!');
            return redirect('/');
        }

    }
}
