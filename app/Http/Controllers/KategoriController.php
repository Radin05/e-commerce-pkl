<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required',
            'gambar_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->keterangan = $request->keterangan;

        if ($request->hasFile('gambar_kategori')) {
            $img = $request->file('gambar_kategori');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/kategori/', $name);
            $kategori->gambar_kategori = $name;
        }

        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::FindOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::FindOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required',
            // 'gambar_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $kategori = Kategori::FindOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->keterangan = $request->keterangan;

        if ($request->hasFile('gambar_kategori')) {
            $kategori->deleteImage();
            $img = $request->file('gambar_kategori');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/kategori/', $name);
            $kategori->gambar_kategori = $name;
        }

        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::FindOrFail($id);
        $kategori->delete();
        // $siswa->genre()->detach();
        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil dihapus');

    }
}
