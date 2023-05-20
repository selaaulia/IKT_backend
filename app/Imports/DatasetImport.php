<?php

namespace App\Imports;

use App\Models\DPM;
use Maatwebsite\Excel\Concerns\ToModel;

class DatasetImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DPM([
            'Cx' => $row[0],
            'Cy' => $row[1],
            'Fault' => $row[2],
        ]);
    }
}
