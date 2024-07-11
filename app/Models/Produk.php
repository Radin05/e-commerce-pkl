<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Keranjang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','deskripsi','harga','stok','gambar_produk','id_kategori'];
    public $timestamps = true;

    //relasi ke table detail
    // public function detail_pesanan()
    // {
    //     return $this->hasMany(DetailPesanan::class, 'id_produk');
    // }

    //relasi ke tabel kategori
    public function Kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk' . $this->gambar_produk))){
            return unlink(public_path('images/produk' . $this->gambar_produk));
        }
    }
}
