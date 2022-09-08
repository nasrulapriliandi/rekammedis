<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekammedis extends Model
{
    use HasFactory;
    protected $fillable = ['pasien_id', 'diagnosa_id', 'obat_id', 'tgl_berobat'];

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }

    public function diagnosa(){
        return $this->belongsTo(Diagnosa::class);
    }

    public function obat(){
        return $this->belongsTo(Obat::class);
    }
}
