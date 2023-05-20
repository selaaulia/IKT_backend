<?php

namespace App\Http\Controllers;

use App\Models\DPM;
use Illuminate\Http\Request;
use App\Imports\DatasetImport;
use Excel;

class DPMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if ($request->file('file')){
            // menangkap file excel
            $file = $request->file('file');
    
            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();
    
            // upload ke folder file_siswa di dalam folder public
            $file->move('datasetDPM',$nama_file);
    
            // import data
            Excel::import(new DatasetImport, public_path('/datasetDPM/'.$nama_file));

            return response()->json('Dataset berhasil diimpor', 200);
        } else {
            return response()->json('Test');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DPM  $dPM
     * @return \Illuminate\Http\Response
     */
    public function show(DPM $dPM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DPM  $dPM
     * @return \Illuminate\Http\Response
     */
    public function edit(DPM $dPM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DPM  $dPM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DPM $dPM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DPM  $dPM
     * @return \Illuminate\Http\Response
     */
    public function destroy(DPM $dPM)
    {
        //
    }
}
