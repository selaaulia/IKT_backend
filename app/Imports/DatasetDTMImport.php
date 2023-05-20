<?php

namespace App\Imports;

use App\Models\DTM;
use Maatwebsite\Excel\Concerns\ToModel;

class DatasetDTMImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DTM([
            'CH4' => $row[0],
            'C2H2' => $row[1],
            'C2H4' => $row[1],
            'Fault' => $row[2],
        ]);
    }
}
