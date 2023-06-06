<?php

namespace App\Http\Controllers;

use App\Models\DPM_input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DPMInputController extends Controller
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
                'penguji_id' => 'required',
                'transformator_id' => 'required',
                'H2' => 'required',
                'CH4' => 'required',
                'C2H2' => 'required',
                'C2H4' => 'required',
                'C2H6' => 'required',
            ]);

            DPM_input::create([
                'penguji_id'  => $request->penguji_id,
                'transformator_id'  => $request->transformator_id,
                'H2'  => (double)$request->H2,
                'CH4'  => (double)$request->CH4,
                'C2H2'  => (double)$request->C2H2,
                'C2H4'  => (double)$request->C2H4,
                'C2H6'  => (double)$request->C2H6,
            ]);

            DB::commit();
            return response()->json('Data gas terlarut DPM berhasil disimpan!', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DPM_input  $dPM_input
     * @return \Illuminate\Http\Response
     */
    public function show(DPM_input $dPM_input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DPM_input  $dPM_input
     * @return \Illuminate\Http\Response
     */
    public function edit(DPM_input $dPM_input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DPM_input  $dPM_input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DPM_input $dPM_input)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DPM_input  $dPM_input
     * @return \Illuminate\Http\Response
     */
    public function destroy(DPM_input $dPM_input)
    {
        //
    }
}
