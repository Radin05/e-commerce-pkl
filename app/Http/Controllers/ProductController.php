<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product(Request $request)
    {
        $kategoris = Kategori::all();
        $produks = Produk::latest()->paginate(12);
        if ($request->kategori) {
            $produks = Produk::where('kategori_id', $request->kategori)->latest()->paginate(12)->withQueryString();
        }

        if ($request->subKategori) {
            $produks = Produk::where('sub_kategori_id', $request->subKategori)->latest()->paginate(12)->withQueryString();
        }

        if ($request->min || $request->max) {
            $produks = Produk::whereBetween('harga', [$request->min, $request->max])->paginate(12)->withQueryString();
        }

        $keyword = $request->keyword;
        if ($keyword) {
            $produks = Produk::where('nama_produk', 'LIKE', '%' . $keyword . '%')->paginate(12)->withQueryString();
        }

        if ($request->diskon) {
            $produks = Produk::where('diskon', '>', 0)->paginate(12)->withQueryString();
        }

        // if ($request->ukuran) {
        //     $produks = UkuranProduk::where('ukuran_id', 1)
        //         ->get();

        //     dd($produks);
        // }

        return view('user.produk', compact('produks', 'kategoris', 'keyword', 'ukurans', 'produks_diskon'));
    }

    public function detailTransaksi($id)
    {
        $produks = Produk::findOrFail($id);
        $produks_terjual = DetailTransaksi::join('keranjangs', 'detail_transaksis.keranjang_id', '=', 'keranjangs.id')->
            where('keranjangs.id_produk', $id)->where('detail_transaksis.status', 'sukses')->count();

        $images = Image::where('produk_id', $produks->id)->get();

        return view('user.detailProduk', compact(
            'produks',
            'images',
            'produks_terjual',
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
