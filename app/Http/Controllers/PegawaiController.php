<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Pkary;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {


        // $data = Pkary::with('pegawais')->find('np');
        // ->select('pegawais.id','pkaries.jabatan','pkaries.nip', 'pkaries.nama_karyawan')
        //         ->join('pkaries', 'pegawais.nip','=' ,'pkaries.nip')
        //         ->get();
        // dd($data);
        if ($request->ajax()) {
            $data = DB::table('pegawais')
                ->select('pegawais.nip', 'pkaries.nama_karyawan', 'pkaries.jabatan')
                ->join('pkaries', 'pegawais.nip', '=', 'pkaries.nip')
                ->get();
                $no=1;
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit 
                    </a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Hapus 
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
        //
    }
}
