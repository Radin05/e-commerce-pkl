@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Data Kategori</div>
                    <div class="card-body">
                        <form action="{{route('kategori.update', $kategori->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                                <label class="form-label">Gambar</label>
                            <img src="{{asset('/images/kategori/' . $kategori->gambar_kategori)}}" width="100">
                            <input type="file" class="form-control" name="gambar_kategori">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{$kategori->keterangan}}">
                                </div>
                            <button type="submit" class="btn btn-sm btn-success">Edit</button>
                            <a href="{{url('kategori')}}"class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
