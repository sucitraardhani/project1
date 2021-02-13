<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $data_anggota =\App\Models\anggota::all();
        return view('anggota.index',['data_anggota'=> $data_anggota]);
    }
    public function create(Request $request)
    {
        //return $request ->all();
        \App\Models\anggota::create ($request ->all());
        return redirect('/anggota')->with('sukses','Berhasil');
    }
    public function edit($id)
    {
       $anggota= \App\Models\anggota::find($id);
       return view('anggota/edit',['anggota'=>$anggota]);
    }
    public function update(Request $request,$id)
    {
        $anggota= \App\Models\anggota::find($id);
        $anggota->update($request->all());
        return redirect('/anggota')->with('sukses','data berhasil diupdate!');
    }
    public function delete($id)
    {
       $anggota = \App\Models\anggota::find($id);
       $anggota->delete($anggota);
       return redirect('/anggota')->with('sukses','data berhasil dihapus!');
    }
}
