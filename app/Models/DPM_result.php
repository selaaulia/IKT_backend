<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPM_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'dpm_input_id',
        'Cx',
        'Cy',
        'Fault'
    ];
}
