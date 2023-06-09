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

    public function transformator() {
        return $this->belongsTo(Transformator::class, 'transformator_id', 'id');
    }

    public function penguji() {
        return $this->belongsTo(Penguji::class, 'penguji_id', 'id');
    }

    public function result() {
        return $this->hasMany(DTM_result::class, 'dtm_input_id', 'id');
    }
}
