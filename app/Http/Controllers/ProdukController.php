<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function getProdukById($id){
        $produk = Produk::findOrFail($id);
        return view('detail', compact('produk'));
    }

    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'gambar_produk' => 'required',
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar_produk')) {
            $img = $request->file('gambar_produk');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk/', $name);
            $produk->gambar_produk = $name;
        }

        $produk->save();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  $validate = $request->validate([
        //     'nama_produk' => 'required',
        //     'harga' => 'required',
        //     'gambar_produk' => 'required',
        // ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;


        if ($request->hasFile('gambar_produk')) {
            $produk->deleteImage();
            $img = $request->file('gambar_produk');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk/', $name);
            $produk->gambar_produk = $name;
        }

        $produk->save();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::FindOrFail($id);
        $produk->delete();
        // $siswa->genre()->detach();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil dihapus');
    }
}
