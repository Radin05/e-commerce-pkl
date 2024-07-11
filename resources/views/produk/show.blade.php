@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Show Produk</div>
                    <div class="card-body">
                        {{-- <form action="#" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}"disabled>
                                <label class="form-label">Deskrpisi</label>
                                <input type="text" class="form-control" name="deskripsi" value="{{$produk->deskripsi}}"disabled>
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{$produk->harga}}"disabled>
                                <label class="form-label">Gambar Produk</label>
                                <img src="{{asset('/images/produk/' . $produk->gambar_produk)}}" style="width: 100px;" alt=""></td>
                                </div>
                            <a href="{{route('produk.index')}}"class="btn btn-sm btn-primary">Back</a>
                        </form> --}}
                        <div class="row">


                            <div class="card-header">
                                <h4 class="card-title">Tampil Data Produk</h4>
                            </div>
                            <div class="card-body">
                                 <form action="{{route('produk.store')}}" method="POST">

                                        <div class="card mb-3">
                                        <img src="{{asset('/images/produk/'.$produk->gambar_produk)}}" class="card-img-top" alt="..." >
                                        <div class="card-body">
                                            <h5 class="card-title">{{$produk->nama_produk}}</h5>
                                            <h6 class="card-title">Kategori : {{$produk->kategori->nama_kategori}}</h6>
                                            <p class="card-text">{{$produk->deskripsi}}</p>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <a href="{{route('produk.index')}}"class="btn btn-primary">Back</a>
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
