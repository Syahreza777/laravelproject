<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Tanaman;

class CProjectku extends Controller
{
    public function projectku(){
        $data = Kategori::all();
        return view('projectku', compact('data'));
    }

    public function gallery(){
        $data = Tanaman::all();
        return view('gallery', compact('data'));
    }

}
