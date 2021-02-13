<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'tb_periodebunga';
    protected $fillable = ['periode', 'persentase', 'status_proses'];
    

    public function Anggota()
    {
        return $this->belongsToMany('App\Models\Anggota', 'tb_bungasimpanan', 'anggota_id', 'periode_id');
    }
}

