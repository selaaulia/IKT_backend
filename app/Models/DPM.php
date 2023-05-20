<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPM extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cx',
        'Cy',
        'Fault'
    ];
}
