<?php

namespace App\Http\Controllers;

use App\Models\DTM_input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DTMInputController extends Controller
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
                'CH4' => 'required',
                'C2H2' => 'required',
                'C2H4' => 'required',
            ]);

            DTM_input::create([
                'penguji_id'  => $request->penguji_id,
                'transformator_id'  => $request->transformator_id,
                'CH4'  => $request->CH4,
                'C2H2'  => $request->C2H2,
                'C2H4'  => $request->C2H4,
            ]);

            DB::commit();
            return response()->json('Data gas terlarut DTM berhasil disimpan!', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DTM_input  $dTM_input
     * @return \Illuminate\Http\Response
     */
    public function show(DTM_input $dTM_input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTM_input  $dTM_input
     * @return \Illuminate\Http\Response
     */
    public function edit(DTM_input $dTM_input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTM_input  $dTM_input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTM_input $dTM_input)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTM_input  $dTM_input
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTM_input $dTM_input)
    {
        //
    }
}


