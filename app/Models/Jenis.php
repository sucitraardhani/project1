<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'tb_jenistrx';
    protected $fillable = ['transaksi', 'pengali'];

    public function Anggota()
    {
        return $this->belongsToMany('App\Models\Anggota', 'tb_simpanan', 'anggota_id', 'jenistrx_id');
    }
}
