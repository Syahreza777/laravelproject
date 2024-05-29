<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $primaryKey = 'kode_tanaman';
    public $timestamps = false;
    protected $fillable = [
        'nama_tanaman',
        'deskripsi_tanaman',
        'gambar',
    ];               
}
