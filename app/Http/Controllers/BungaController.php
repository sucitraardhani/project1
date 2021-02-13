<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BungaController extends Controller
{
    public function index(Request $request)
    {
        $simpan_bunga = \App\Models\Bunga::all();
        $anggota = \App\Models\Simpanan::join('tb_anggota', 'tb_simpanan.anggota_id', '=', 'tb_anggota.id')->select('tb_anggota.*')->groupBy('anggota_id')->get();
        $periode = \App\Models\Periode::all();
        $pengali = \App\Models\Periode::where('id', $request->periode_id)->first();

        if(isset($request->periode_id) && !empty($request->periode_id)){
            // return 1;
            // hitung bunga setiap anggota
            // jika bunga sudah dihitung, update bunga yang ada
            foreach($anggota as $ang){
                $bungaAnggota = \App\Models\Bunga::where('anggota_id', $ang->id)->where('periode_id', $request->periode_id)->first();
                $nominal = \App\Models\Simpanan::where('anggota_id', $ang->id)->pluck('nominal');
                $hasilHitungBunga = $nominal->sum() * $pengali['persentase'];

                if($bungaAnggota) {
                    //  ada bunga. update yang lama
                    \App\Models\Bunga::where('id', $bungaAnggota->id)
                        ->update([
                        'nominal_bunga' => $hasilHitungBunga
                    ]);
                }
                else {
                    $date = date("Y/m/d H:i:s");
                    \App\Models\Bunga::create([
                        'anggota_id' => $ang->id,
                        'periode_id' => $request->periode_id,
                        'tanggal_proses' => $date,
                        'nominal_bunga' => $hasilHitungBunga,
                    ]);
                }
            }
        }
        $simpananBunga = \App\Models\Bunga::where('periode_id', $request->periode_id)->get();
        return view('simpanbunga.index', compact('simpan_bunga', 'anggota', 'periode', 'simpananBunga'));
    }


    public function create(Request $request)
    {
        \App\Models\Bunga::create($request->all());
        $anggota = \App\Models\Anggota::all();
        $periode = \App\Models\Periode::all();
        return redirect('/simpanbunga', compact('anggota', 'periode'));
    
    }

    public function edit($id)
    {
        $simpan_bunga = \App\Models\Bunga::find($id);
        $anggota = \App\Models\Anggota::all();
        $periode = \App\Models\Periode::all();
        return view('simpanbunga.edit', compact('simpan_bunga','anggota','periode'));
    }

    public function update(Request $request, $id)
    {
        $simpan_bunga = \App\Models\Bunga::find($id);
        $simpan_bunga->anggota_id = $request->anggota_id;
        $simpan_bunga->periode_id = $request->periode_id;
        $simpan_bunga->nominal_bunga = $request->nominal_bunga;
        $simpan_bunga->update();
        return redirect('/simpanbunga')->with('status', 'Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
        $simpan_bunga = \App\Models\Bunga::find($id);
        $simpan_bunga->delete($simpan_bunga);
        return redirect('/simpanbunga')->with('sukses', 'Data berhasil dihapus');
    }

}
