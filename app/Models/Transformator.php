<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transformator extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function inputDTM() {
        return $this->hasMany(DTM_input::class, 'transformator_id', 'id')->whereHas('result')->with('result');
    }
}
