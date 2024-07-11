<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $fillable = ['nama_kategori', 'gambar_kategori', 'keterangan'];
    public $visible = ['nama_kategori', 'gambar_kategori', 'keterangan'];
    public $timestamp = true;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }

    //mengapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/kategori' . $this->gambar_kategori))){
            return unlink(public_path('images/kategori' . $this->gambar_kategori));
        }
    }
}
