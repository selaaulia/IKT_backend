<?php

namespace App\Http\Controllers;

use App\Exports\ResultExport;
use App\Http\Resources\ResultResource;
use App\Models\DPM_result;
use App\Models\DTM_result;
use App\Models\Transformator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{
    public function index(Request $request) {
        $dtm = DTM_result::whereHas('input', function ($query) use ($request) {
            $query->whereRelation('transformator', 'id', $request->transformator_id);
        })->get();
        // $dpm = querynya disini
        $dpm = DPM_result::whereHas('input', function ($query) use ($request) {
            $query->whereRelation('transformator', 'id', $request->transformator_id);
        })->get();

        $data = $dtm->merge($dpm); // nanti diubah jadi gini $data = $dtm->merge($dpm);
        return response()->json(ResultResource::collection($data), 200);
    }

    public function export(Request $request) {
        $request->validate([
            'transformator_id'    => 'required'
        ]);
        $dtm = DTM_result::whereHas('input', function ($query) use ($request) {
            $query->whereRelation('transformator', 'id', $request->transformator_id);
        })->get();
        // $dpm = querynya disini
        $dpm = DPM_result::whereHas('input', function ($query) use ($request) {
            $query->whereRelation('transformator', 'id', $request->transformator_id);
        })->get();

        $transformator = Transformator::find($request->transformator_id);

        $data = $dtm->merge($dpm); // nanti diubah jadi gini $data = $dtm->merge($dpm);
        return Excel::download(new ResultExport(ResultResource::collection($data)), $transformator->name . '_result.xlsx');
    }
}
