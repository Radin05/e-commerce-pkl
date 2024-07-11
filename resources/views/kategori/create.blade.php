@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Data Kategori</div>
                    <div class="card-body">
                        <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori">
                                 <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar_kategori">
                        </div>
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                                </div>
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                            <a href="{{url('kategori')}}"class="btn btn-sm btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
