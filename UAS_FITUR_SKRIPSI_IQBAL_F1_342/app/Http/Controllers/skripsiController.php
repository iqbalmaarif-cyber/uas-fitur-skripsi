<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skripsiController extends Controller
{
    public function yandex(){
        $data_skripsi = \App\skripsi::all();
        return view('skripsi.yandex',['skripsi' => $data_skripsi]);
    }
    public function create(Request $request)
    {

       \App\skripsi::create($request->all());
       return redirect('/skripsi')->with('sukses','Data Berhasil Ditambah');
    }
    public function edit($id)
    {
            $skripsi = \App\skripsi::find($id);
            return view('skripsi/edit',['skripsi'=>$skripsi]);

    }
    public function update(Request $request,$id)

    {
        $skr = \App\skripsi::find($id);
        $skr->update($request->all());
        return redirect('/skripsi')->with('sukes','Data Berhasil Di Ubah...!!!');

    }
    public function delete($id)
    {
        $skr = \App\skripsi::find($id);
        $skr->delete();
        return redirect('/skripsi')->with('Sukes','Data Berhasil Di Hapus...!!!');


    }

}
