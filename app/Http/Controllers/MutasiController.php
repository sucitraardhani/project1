<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Anggota;
use App\Models\Jenis;


class MutasiController extends Controller
{
    public function index()
    {
        $data_anggota = \App\Models\Anggota::all();
        return view('mutasitransaksi.index', compact('data_anggota'));
    }

    public function create(Request $request)
    {
        $anggota = \App\Models\Anggota::find($request->id);
        $simpanan = \App\Models\Simpanan::where('anggota_id', $request->id)->get();
        $jenistrx = \App\Models\Jenis::all();
        $masuk = \App\Models\Simpanan::where('anggota_id', $request->id)->where('jenistrx_id', 1)->select(['nominal' => 'nominal']);
        $keluar = \App\Models\Simpanan::where('anggota_id', $request->id)->where('jenistrx_id', 2)->select(['nominal' => 'nominal']);
        $bunga = \App\Models\Simpanan::where('anggota_id', $request->id)->where('jenistrx_id', 3)->select(['nominal' => 'nominal']);
        $saldo = $masuk->sum('nominal') + $keluar->sum('nominal') +  $bunga->sum('nominal');
        return view('mutasitransaksi.hasilmutasi', compact('anggota', 'jenistrx', 'simpanan', 'saldo'));
    }

    public function hasilmutasi(Request $request)
    {
        $simpanan = \App\Models\Simpanan::where('jenistrx_id',13)->where ('anggota_id',$request->anggota)->select(['nominal'=>'nominal']);
        $p = \App\Models\Simpanan ::where ('jenistrx_id',14)->where ('anggota_id',$request->anggota)->select(['nominal'=>'nominal']);
        $total = $simpanan->sum('nominal') + $p->sum('nominal');
        
        
        $anggota = Anggota::find($request->anggota);

        $data = DB::table('tb_simpanan')
            ->join('tb_anggota', 'tb_anggota.id', '=', 'tb_simpanan.anggota_id')
            ->join('tb_jenistrx', 'tb_jenistrx.id', '=', 'tb_simpanan.jenistrx_id')
            ->select('tb_simpanan.*', 'tb_anggota.nama', 'tb_jenistrx.transaksi')
            ->where('tb_simpanan.anggota_id', '=', $anggota->id)
            ->get();

        $jenisTrx = Jenis::all();

        return view('mutasitransaksi.hasilmutasi', [
            'datas' => $data,
            'total' =>  $total,
            'anggota' => $anggota,
            'jenistrx' => $jenisTrx
        ]);
    }

    
}