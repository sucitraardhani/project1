<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Anggota;
use App\Models\Jenis;

class SimpananController extends Controller
{
    public function index()
    {
        $simpanan = \App\Models\Simpanan::all();
        $anggota = \App\Models\Anggota::all();
        $jenistrx = \App\Models\Jenis::all();
        return view('simpanan.index', compact('simpanan', 'anggota', 'jenistrx'));
    }


    public function create()
    {
       
        $anggota = \App\Models\Anggota::all();
        $jenistrx = \App\Models\Jenis::all();
        return redirect('/simpanan')->with('sukses', 'Data sukses');
    }

    public function edit($id)
    {
        $simpanan = \App\Models\Simpanan::find($id);
        $anggota = \App\Models\Anggota::all();
        $jenistrx = \App\Models\Jenis::all();
        return view('simpanan/edit', compact('simpanan', 'anggota', 'jenistrx'));
    }

    public function update(Request $request, $id)
    {
        $simpanan = \App\Models\Simpanan::find($id);
        $simpanan->anggota_id = $request->anggota_id;
        $simpanan->jenistrx_id = $request->jenistrx_id;
        $simpanan->nominal = $request->nominal;
        $simpanan->keterangan = $request->keterangan;
        $simpanan->update();
        return redirect('/simpanan')->with('status', 'Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
        $simpanan = \App\Models\Simpanan::find($id);
        $simpanan->delete($simpanan);
        return redirect('/simpanan')->with('sukses', 'Data berhasil dihapus');
    }

    public function store(Request $request)
    {
        $jenistrx = \App\Models\Jenis::where ('id',$request->jenistrx_id)->pluck ('pengali');
        $nominal = \App\Models\Simpanan::where('anggota_id', $request->anggota_id)->pluck('nominal');
        $hasil = $request->nominal * $jenistrx[0];
        $simpanan = new \App\Models\Simpanan;
        $simpanan->anggota_id = $request->anggota_id;
        $simpanan->tanggal_trx = $request->tanggal_trx;
        $simpanan->jenistrx_id = $request->jenistrx_id;
        $simpanan->nominal = $hasil;
        $simpanan->keterangan = $request->keterangan;
        $simpanan->save();

        return redirect('/simpanan')->with('status', 'Data Berhasil Ditambahkan!');
    }
    
   
}
