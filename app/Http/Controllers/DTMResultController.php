<?php

namespace App\Http\Controllers;

use App\Models\DTM_result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DTMResultController extends Controller
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
        DB::beginTransaction();
        try {
            $request->validate([
                'dtm_input_id'  => 'required',
                'fault' => 'required',
            ]);

            DTM_result::create([
                'dtm_input_id'  => $request->dtm_input_id,
                'Fault'         => $request->fault,
            ]);

            DB::commit();
            return response()->json(['message' => 'Data analisis berhasil disimpan', 'description' => config('description.DTM')[$request->fault]], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DTM_result  $dTM_result
     * @return \Illuminate\Http\Response
     */
    public function show(DTM_result $dTM_result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTM_result  $dTM_result
     * @return \Illuminate\Http\Response
     */
    public function edit(DTM_result $dTM_result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTM_result  $dTM_result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTM_result $dTM_result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTM_result  $dTM_result
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTM_result $dTM_result)
    {
        //
    }
}
