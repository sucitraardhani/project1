<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    protected $table ='tb_simpananbunga';
    protected $fillable = ['anggota_id', 'periode_id', 'tanggal_proses', 'nominal_bunga'];
    
    public function anggota()
    {
        return $this->hasOne(\App\Models\Anggota::class, 'id', 'anggota_id');
    }

    public function periode()
    {
        return $this->hasOne('App\Models\Periode', 'id', 'periode_id');
    }
}
