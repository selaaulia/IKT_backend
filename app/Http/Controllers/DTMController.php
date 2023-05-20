<?php

namespace App\Http\Controllers;

use App\Imports\DatasetDTMImport;
use App\Models\DTM;
use Illuminate\Http\Request;
use Excel;

class DTMController extends Controller
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
            $file->move('datasetDTM',$nama_file);
    
            // import data
            Excel::import(new DatasetDTMImport, public_path('/datasetDTM/'.$nama_file));

            return response()->json('Dataset berhasil diimpor', 200);
        } else {
            return response()->json('Test');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DTM  $dTM
     * @return \Illuminate\Http\Response
     */
    public function show(DTM $dTM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTM  $dTM
     * @return \Illuminate\Http\Response
     */
    public function edit(DTM $dTM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTM  $dTM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTM $dTM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTM  $dTM
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTM $dTM)
    {
        //
    }
}
