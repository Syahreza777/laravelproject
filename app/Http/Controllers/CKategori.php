<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class CKategori extends Controller
{
    //
     public function tampil(){
        $data = Kategori::all();
        return view('tabelkategori', compact('data'));
    }

    public function hapus($id_kategori){
        $cari = Kategori::findOrFail($id_kategori);

        $file = public_path('img/').$cari->gambar;
        // jika ada gambar
        if(file_exists($file)   ){
            // maka hapus foto yang ada di dalam folder img
            @unlink($file);
        }
        $cari->delete();
        return redirect('tabelkategori');
    }

    public function edit($id_kategori){
        $cari = Kategori::findOrFail($id_kategori);
        return view('ekategori', compact('cari'));
    }

    public function update(Request $r, $id_kategori){
        $cari = Kategori::findOrFail($id_kategori);
        $awal = $cari->gambar;

        $dt=[
            'nama_kategori' => $r['nama'],
            'deskripsi' => $r['deskripsi'],
            'gambar' => $awal,
        ];
        
        $r->gambar->move(public_path().'/img', $awal);
        $cari->update($dt);
        return redirect('tabelkategori');
    }

     public function tambah(){
        return view('fkategori');
    }

    public function simpan(Request $r){
        $gbr = $r->gambar;
        $namaFile = time().rand(100,999).".".$gbr->getClientOriginalExtension();

        $s = new Kategori();
        $s->nama_kategori = $r->nama;
        $s->deskripsi = $r->deskripsi;
        $s->gambar = $namaFile;

        $gbr->move(public_path().'/img',$namaFile);
        $s->save();
        
        return redirect('tabelkategori');
    }
}
