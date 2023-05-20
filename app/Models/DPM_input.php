<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPM_input extends Model
{
    use HasFactory;
    protected $fillable = [
        'penguji_id',
        'transformator_id',
        'H2',
        'CH4',
        'C2H2',
        'C2H4',
        'C2H6'
    ];
}
