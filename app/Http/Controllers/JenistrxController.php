<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenistrxController extends Controller
{
    public function index(Request $request)
    {
        $jenis_transaksi = \App\Models\Jenis::all();
        return view('jenistrx.index', ['jenis_transaksi' => $jenis_transaksi]);
    }

    public function create(Request $request)
    {
        \App\Models\Jenis::create($request->all());
        return redirect('/jenistrx')->with('sukses', 'Data sukses');
    }

    public function edit($id)
    {
        $jenistrx = \App\Models\Jenis::find($id);
        return view('/jenistrx/edit', ['jenistrx' => $jenistrx]);
    }

    public function update(Request $request, $id)
    {
        $jenistrx = \App\Models\Jenis::find($id);
        $jenistrx->update($request->all());
        return redirect('/jenistrx')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $jenistrx = \App\Models\Jenis::find($id);
        $jenistrx->delete($jenistrx);
        return redirect('/jenistrx')->with('sukses', 'Data berhasil dihapus');
    }
}
