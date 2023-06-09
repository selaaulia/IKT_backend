<?php

namespace App\Http\Controllers;

use App\Models\DPM_result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DPMResultController extends Controller
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
        //
        DB::beginTransaction();
        try {
            $request->validate([
                'dpm_input_id' => 'required',
                'cx' => 'required',
                'cy' => 'required',
                'fault' => 'required',
            ]);

            DPM_result::create([
                'dpm_input_id' => $request->dpm_input_id,
                'Cx' => $request->cx,
                'Cy' => $request->cy,
                'Fault' => $request->fault,
            ]);

            DB::commit();
            return response()->json(['message' => 'Data analisis berhasil disimpan', 'description_dpm' => config('description_dpm')[$request->fault]], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DPM_result  $dPM_result
     * @return \Illuminate\Http\Response
     */
    public function show(DPM_result $dPM_result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DPM_result  $dPM_result
     * @return \Illuminate\Http\Response
     */
    public function edit(DPM_result $dPM_result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DPM_result  $dPM_result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DPM_result $dPM_result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DPM_result  $dPM_result
     * @return \Illuminate\Http\Response
     */
    public function destroy(DPM_result $dPM_result)
    {
        //
    }
}
