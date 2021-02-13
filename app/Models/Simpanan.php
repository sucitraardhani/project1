<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'tb_simpanan';
    protected $fillable = ['anggota_id', 'tanggal_trx', 'jenistrx_id',  'nominal', 'keterangan'];

    public function anggota()
    {
        return $this->hasOne('App\Models\Anggota', 'id', 'anggota_id');
    }

    public function jenistrx()
    {
        return $this->hasOne('App\Models\Jenis', 'id', 'jenistrx_id');
    }
}
