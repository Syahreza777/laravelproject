<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;

class Ctanaman extends Controller
{
    //
    public function tampil(){
        $data = Tanaman::all();
        return view('tabeltanaman', compact('data'));
    }

    public function hapus($kd_tanaman){
        $cari = Tanaman::findOrFail($kd_tanaman);

        $file = public_path('img/').$cari->gambar;
        // jika ada gambar
        if(file_exists($file)){
            // maka hapus foto yang ada di dalam folder img
            @unlink($file);
        }

        $cari->delete();
        return redirect('tabeltanaman');
    }

    public function edit($kd_tanaman){
        $cari = Tanaman::findOrFail($kd_tanaman);
        return view('etanaman', compact('cari'));
    }

    public function update(Request $r, $kd_tanaman){
        $cari = Tanaman::findOrFail($kd_tanaman);
        $awal = $cari->gambar;

        $dt=[
            'nama_tanaman' => $r['nama'],
            'deskripsi_tanaman' => $r['deskripsi'],
            'gambar' => $awal,
        ];

        $r->gambar->move(public_path().'/img', $awal);
        $cari->update($dt);
        return redirect('tabeltanaman');
    }

    public function tambah(){
        return view('ftanaman');
    }

    public function simpan(Request $r){
        $gbr = $r->gambar;
        $namaFile = time().rand(100,999).".".$gbr->getClientOriginalExtension();

        $s = new Tanaman();
        $s->nama_tanaman = $r->nama;
        $s->deskripsi_tanaman = $r->deskripsi;
        $s->gambar = $namaFile;

        $gbr->move(public_path().'/img',$namaFile);
        $s->save();

        return redirect('tabeltanaman');
    }
}
