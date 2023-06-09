<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResultResource;
use App\Models\DPM_result;
use App\Models\DTM_result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(Request $request) {
        $dtm = DTM_result::whereHas('input', function ($query) use ($request) {
            $query->whereRelation('transformator', 'id', $request->transformator_id);
        })->get();
        // $dpm = querynya disini

        $data = $dtm; // nanti diubah jadi gini $data = $dtm->merge($dpm);
        return response()->json(ResultResource::collection($data), 200);
    }
}
