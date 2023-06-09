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

    public function input(){
        return $this->belongsTo(DPM_input::class, 'dtm_input_id', 'id');
    }
    public function getMethodAttribute(){
        return 'DPM';
    }
    public function getDescriptionAttribute() {
        return config('description.DPM')[$this->Fault]. '. Titk Cx= '. $this->Cx. ', dan Cy= ' .$this->Cy;
    }
}
