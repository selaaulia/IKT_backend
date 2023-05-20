<?php

namespace App\Http\Controllers;

use App\Models\Transformator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransformatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transformator = Transformator::select('id', 'name')->get();
        return response()->json($transformator, 200);
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
                'name' => 'required|unique:transformators,name',
            ]);

            Transformator::create([
                'name'  => $request->name
            ]);

            DB::commit();
            return response()->json('Data transformator berhasil disimpan!', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transformator  $transformator
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $transformator = Transformator::firstWhere('name', $request->name);
        return response()->json($transformator, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transformator  $transformator
     * @return \Illuminate\Http\Response
     */
    public function edit(Transformator $transformator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transformator  $transformator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transformator $transformator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transformator  $transformator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transformator $transformator)
    {
        //
    }
}
