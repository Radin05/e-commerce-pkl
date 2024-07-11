<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class KeranjangAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjangs = Keranjang::where('id')->with('produk', 'user')->latest()->get();
        return view('keranjang.index', compact('keranjangs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produks = Produk::all();
        $users = User::where('id')->get();
        return view('keranjang.create', compact('produks', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'id_user' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required',
        ]);

        $cek_keranjangs = Keranjang::where('id_user', $request->id_user)->where('id_produk', $request->id_produk)->first();

        if (!empty($cek_keranjangs)) {
            $keranjangs = Keranjang::where('id_user', $request->id_user)->where('id_produk', $request->id_produk)->first();
            $keranjangs->jumlah += $request->jumlah;
            $harga = ($keranjangs->produk->harga * $request->jumlah);
            $keranjangs->total_harga += $harga;
        } else {
            $keranjangs = new Keranjang();
            $keranjangs->id_user = $request->id_user;
            $keranjangs->id_produk = $request->id_produk;
            $keranjangs->jumlah = $request->jumlah;
            $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah);
        }
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $produks = Produk::all();
        $users = User::all();
        return view('keranjang.edit', compact('keranjangs', 'produks', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'id_user' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->id_user = $request->id_user;
        $keranjangs->id_produk = $request->id_produk;
        $keranjangs->jumlah = $request->jumlah;
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('success', 'Data has been edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->delete();
        return redirect()
            ->route('keranjang.index')->with('success', 'Data has been deleted');

    }
}
