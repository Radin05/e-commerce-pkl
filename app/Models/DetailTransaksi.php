<?php

namespace App\Models;

use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

     public $fillable = ['id', 'id_user', 'id_produk', 'tgl_pesan', 'jumlah', 'total_harga'];
    public $visible = ['id', 'id_user', 'id_produk', 'tgl_pesan', 'jumlah', 'total_harga'];
    public $timestamp = true;

    public function user()
    {
        return $this->BelongsTo(User::class, 'id_user');
    }

     public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

     public function produk()
    {
        return $this->BelongsTo(Produk::class, 'id_produk');
    }

    //mengapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk' . $this->gambar_produk))){
            return unlink(public_path('images/produk' . $this->gambar_produk));
        }
    }
}
