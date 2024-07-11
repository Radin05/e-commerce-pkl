<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

     protected $fillable = ['id', 'id_user', 'id_produk', 'jumlah'];
    public $timestamp = true;

     public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
