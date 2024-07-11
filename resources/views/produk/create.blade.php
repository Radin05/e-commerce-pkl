@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Data Produk</div>
                    <div class="card-body">
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name Produk</label>
                                <input type="text" class="form-control" name="nama_produk">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stok">
                                <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar_produk">
                                </div>
                                <label class="form-label">Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                            <a href="{{ url('product') }}"class="btn btn-sm btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
