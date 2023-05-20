<?php

namespace App\Http\Controllers;

use App\Models\Penguji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengujiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penguji = Penguji::select('id', 'name')->get();
        return response()->json($penguji, 200);
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
                'name' => 'required',
            ]);

            Penguji::create([
                'name'  => $request->name
            ]);

            DB::commit();
            return response()->json('Data penguji berhasil disimpan!', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penguji  $penguji
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $penguji = Penguji::firstWhere('name', $request->name);
        return response()->json($penguji, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penguji  $penguji
     * @return \Illuminate\Http\Response
     */
    public function edit(Penguji $penguji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penguji  $penguji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penguji $penguji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penguji  $penguji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penguji $penguji)
    {
        //
    }
}
