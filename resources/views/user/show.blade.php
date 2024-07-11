@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show User</div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama User</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $user->name }}"disabled>
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email"
                                    value="{{ $user->email }}"disabled>
                            </div>
                            <a href="{{ route('user.index') }}"class="btn btn-sm btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
