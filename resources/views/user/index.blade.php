@extends('layouts.app')
@section('content')
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data User
                <a href="{{route('user.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  @php $no = 1; @endphp
                  <tbody>
                    @foreach($user as $item)
                    <tr>
                      <td>
                        <div class="align-middle text-center">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">{{$no++}}</span>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->name}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <form action="{{route('user.destroy',$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('user.edit', $item->id)}}" class="badge badge-sm bg-gradient-success">Edit</a>
                                    <a href="{{route('user.show', $item->id)}}" class="badge badge-sm bg-gradient-warning">Show</a>
                                    <button class="badge badge-sm bg-gradient-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
