<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTM_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'dtm_input_id',
        'Fault'
    ];
}
