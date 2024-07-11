@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Produk
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Produk</label>
                                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                            name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}">
                                        @error('nama_produk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Deskripsi</label>
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}">
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Harga</label>
                                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                            name="harga" value="{{ old('harga', $produk->harga) }}">
                                        @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Stock</label>
                                        <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                            name="stok" value="{{ old('stok', $produk->stok) }}">
                                        @error('stok')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Image</label>
                                        @if($produk->gambar_produk)
                                        <p><img src="{{ asset('image/produk/' . $produk->gambar_produk) }}" alt="Gambar" width="100px"></p>
                                        @endif
                                        <input type="file" name="gambar_produk" class="form-control @error('gambar_produk') is-invalid @enderror">
                                        @error('gambar_produk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Kategori</label>
                                        <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $data)
                                            <option value="{{$data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : ''
                                                }}>{{$data->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                        @error('nama_kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
