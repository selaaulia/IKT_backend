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

    public function input() {
        return $this->belongsTo(DTM_input::class, 'dtm_input_id', 'id');
    }

    public function getMethodAttribute() {
        return 'DTM';
    }

    public function getDescriptionAttribute() {
        return '-'; // Ganti deskripsinya terserah pengennya gimana
    }
}
