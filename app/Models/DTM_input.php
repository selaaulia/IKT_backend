<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTM_input extends Model
{
    use HasFactory;
    protected $fillable = [
        'penguji_id',
        'transformator_id',
        'CH4',
        'C2H2',
        'C2H4'
    ];
}
