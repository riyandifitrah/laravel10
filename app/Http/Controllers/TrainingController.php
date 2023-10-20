<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        // dd($data);
        if($request->ajax()){
            $data = Training::select('trainings.id','trainings.jenis','trainings.tgl_sertif','trainings.keterangan', 'pegawais.nip')
            ->join('pegawais', 'trainings.nip','=' ,'pegawais.nip')
            ->get();
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn='
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
        return view("training_karyawan.index_training_karyawan");
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
        //
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
