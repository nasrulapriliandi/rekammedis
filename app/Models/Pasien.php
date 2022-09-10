<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'umur', 'alamat', 'jeniskelamin'];

    public function rekammedis(){
        return $this->hasMany(Rekammedis::class);
    }
}
