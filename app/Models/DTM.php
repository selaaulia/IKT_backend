<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTM extends Model
{
    use HasFactory;
    protected $fillable = [
        'CH4',
        'C2H2',
        'C2H4',
        'Fault'
    ];
}
