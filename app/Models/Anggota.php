<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'tb_anggota';
    protected $fillable = ['nama', 'alamat', 'telepon', 'status'];

    public function jenistrx()
    {
        return $this->belongsToMany('App\Models\Jenis', 'tb_simpanan', 'anggota_id', 'jenistrx_id');
    }

    public function periode()
    {
        return $this->belongsToMany('App\Models\Periode', 'tb_bungasimpanan', 'anggota_id', 'periode_id');
    }


}
