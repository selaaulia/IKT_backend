<?php

namespace App\Exports;

use App\Http\Resources\ResultResource;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $result;

    public function __construct($result)
    {
        $this->result = $result;
    }
    
    public function collection()
    {
        return $this->result;
    }

    public function headings(): array
    {
        return [
            'id',
            'transformator',
            'penguji',
            'method',
            'H2',
            'CH4',
            'C2H2',
            'C2H4',
            'C2H6',
            'fault',
            'description',
            'date',
        ];
    }
}
