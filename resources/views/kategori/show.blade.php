@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Show Kategori</div>
                    <div class="card-body">
                        {{-- <form action="#" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}"disabled>
                                <label class="form-label">Gambar Kategori</label>
                                <img src="{{asset('/images/kategori/' . $kategori->gambar_kategori)}}" style="width: 100px;" alt=""></td>
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{$kategori->keterangan}}"disabled>
                                </div>
                            <a href="{{url('kategori')}}"class="btn btn-sm btn-primary">Back</a>
                        </form> --}}
                        <div class="row">


                            <div class="card-header">
                                <h4 class="card-title">Tampil Data Kategori</h4>
                            </div>
                            <div class="card-body">
                                 <form action="{{route('kategori.store')}}" method="POST">

                                        <div class="card mb-3">
                                        <img src="{{asset('/images/Kategori/'.$kategori->gambar_kategori)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$kategori->nama_kategori}}</h5>
                                            <p class="card-text">{{$kategori->keterangan}}</p>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <a href="{{route('kategori.index')}}"class="btn btn-primary">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
