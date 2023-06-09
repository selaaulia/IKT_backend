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

    public function transformator(){
        return $this->belongTo(Transformator::class, 'transformator_id', 'id');
    }

    public function penguji() {
        return $this->belongTo(Penguji::class, 'penguji_id', 'id');
    }

    public function result(){
        return $this->hasMany(DPM_result::class, 'dpm_input_id', 'id');
    }
}
