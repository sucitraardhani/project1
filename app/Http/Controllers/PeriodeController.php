<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periode =\App\Models\Periode::all();
        return view('periode.index',['periode'=> $periode]);
    }
    public function create(Request $request)
    {
        //return $request ->all();
        \App\Models\Periode::create ($request ->all());
        return redirect('/periode')->with('sukses','Berhasil');
    }
    public function edit($id)
    {
       $periode= \App\Models\periode::find($id);
       return view('periode/edit',['periode'=>$periode]);
    }
    public function update(Request $request,$id)
    {
        $periode= \App\Models\Periode::find($id);
        $periode->update($request->all());
        return redirect('/periode')->with('sukses','data berhasil diupdate!');
    }
    public function delete($id)
    {
       $periode = \App\Models\Periode::find($id);
       $periode->delete($periode);
       return redirect('/periode')->with('sukses','data berhasil dihapus!');
    }
}
