<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class mahasiswaController extends Controller
{
    public function index()
    {$data_mahasiswa = \App\mahasiswa::all()    ;
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }
    public function create(Request $request)
    {

       \App\mahasiswa::create($request->all());
       return redirect('/mahasiswa')->with('Sukses','Data Berhasil Ditambah');
    }

    public function edit($id)
    {
            $mhs = \App\mahasiswa::find($id);
            return view('mahasiswa/edit',['mahasiswa'=>$mhs]);

    }
    public function update(Request $request,$id)

    {
        $mhs = \App\mahasiswa::find($id);
        $mhs->update($request->all());
        return redirect('/mahasiswa')->with('Sukes','Data Berhasil Di Ubah...!!!');

    }
    public function delete($id)
    {
        $mhs = \App\mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa')->with('Sukes','Data Berhasil Di Hapus...!!!');


    }
    
    
}
