<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Kategori;
use Auth;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function add(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $quantity = $request->input('jumlah', 1);

        $keranjang = Keranjang::where('id_user', Auth::id())->where('id_produk', $id)->first();

        if ($keranjang) {
            $keranjang->jumlah += $quantity;
            $keranjang->save();
        } else {
            Keranjang::create([
                'id_user' => Auth::id(),
                'id_produk' => $id,
                'jumlah' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to Keranjang!');
    }

    public function index()
    {
        $kategori = Kategori::all();
        $keranjangItem = Keranjang::where('id_user', Auth::id())->with('produk')->get();
        return view('keranjang', compact('keranjangItem', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $keranjang = Keranjang::where('id_user', Auth::id())->where('id', $id)->first();

        if ($keranjang) {
            $keranjang->jumlah = $request->jumlah;
            $keranjang->save();
            return redirect()->back()->with('success', 'Keranjang updated successfully!');
        }

        return redirect()->back()->with('error', 'Keranjang item not found!');
    }

    public function delete($id)
    {
        $keranjang = Keranjang::where('id_user', Auth::id())->where('id', $id)->first();

        if ($keranjang) {
            $keranjang->delete();
            return redirect()->back()->with('success', 'Keranjang item removed successfully!');
        }

        return redirect()->back()->with('error', 'Keranjang item not found!');
    }

    public function clear()
    {
        Keranjang::where('id_user', Auth::id())->delete();
        return redirect()->back()->with('success', 'All Keranjang items removed successfully!');
    }
}
