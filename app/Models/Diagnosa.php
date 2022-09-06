<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $fillable = ['penyakit','keterangan'];

    public function rekammedis(){
        return $this->belongsTo(Rekammedis::class);

    }
}
