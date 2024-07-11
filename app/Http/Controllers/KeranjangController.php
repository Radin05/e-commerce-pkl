<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KeranjangController extends Controller
{
    public function add(Request $request,$id)
    {
        // Validasi data input
        $validated = $request->validate([
            'id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Pastikan pengguna sudah login
        if (Auth::guest()) {
            Alert::warning('Silakan login terlebih dahulu untuk menambahkan ke keranjang', 'Maaf');
            return redirect()->back();
        }

        $id = $request->input('id');
        $jumlah = $request->input('jumlah');

        // Cek apakah produk sudah ada di keranjang pengguna
        $existingItem = Keranjang::where('id_produk', $id)
            ->where('id_user', Auth::user()->id)
            ->first();

        if ($existingItem) {
            // Jika produk sudah ada, tambahkan jumlahnya
            $existingItem->jumlah += $jumlah;
            $existingItem->save();

            return back()->with('berhasil', 'Jumlah diperbarui di keranjang');
        }

        // Jika produk belum ada, tambahkan ke keranjang
        $keranjang = new Keranjang();
        $keranjang->id_user = Auth::user()->id;
        $keranjang->id_produk = $id;
        $keranjang->jumlah = $jumlah;
        $keranjang->save();

        return back()->with('berhasil', 'Produk ditambahkan ke keranjang');
    }

    public function index()
    {
        if (Auth::guest()) {
            Alert::warning('Silakan login terlebih dahulu untuk melihat item di keranjang', 'Maaf');
            return redirect()->back();
        } else {
            $keranjang = DB::table('keranjangs')
                ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                ->join('users', 'keranjangs.id_user', '=', 'users.id')
                ->select('keranjangs.*', 'nama_produk as produk_name', 'produks.harga', 'produks.gambar_produk')
                ->where('id_user', Auth::user()->id)
                ->get();

            $harga = DB::table('keranjangs')
                ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                ->join('users', 'keranjangs.id_user', '=', 'users.id')
                ->select(DB::raw('SUM(produks.harga*keranjangs.jumlah) as total'))
                ->where('id_user', Auth::user()->id)
                ->first();

            return view('keranjang', compact('keranjang', 'harga'));
        }
    }

    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        Alert::success('Item berhasil dihapus dari keranjang', 'Sukses');
        return redirect()->route('keranjang.index');
    }

    public function clearCart()
    {
        Keranjang::where('id_user', Auth::user()->id)->delete();

        Alert::success('Keranjang berhasil dikosongkan', 'Sukses');
        return redirect()->back();
    }
}
