<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function tampil() {
        $pengguna = Pengguna::get();
       
        return view('pengguna.tampil',compact('pengguna'));

        
    }

    

    function tambah(){

        return view('pengguna.tambah');
    }

    function submit(Request $request)  {
     $pengguna = new Pengguna();
     $pengguna->nama = $request->nama;
     $pengguna->no_telp = $request->no_telp;
     $pengguna->alamat = $request->alamat;
     $pengguna->kodepost= $request->kodepost;
     $pengguna->save();

     return redirect()->route('pengguna.tampil');
    }

    function edit($id){
        $pengguna = Pengguna::find($id);
        return view ('pengguna.edit',compact('pengguna'));
    }

    function update(Request $request,$id) {
        $pengguna = Pengguna::find($id);
        $pengguna->nama = $request->nama;
        $pengguna->no_telp = $request->no_telp;
        $pengguna->alamat = $request->alamat;
        $pengguna->kodepost= $request->kodepost;
        $pengguna->update();
   
        return redirect()->route('pengguna.tampil');
        
    }

    function delete($id){

        $pengguna = Pengguna::find($id);
        $pengguna->delete();
        return redirect()->route('pengguna.tampil');
    }
}
