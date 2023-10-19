@extends('adminlte::page')
@section('content')
    <form action="{{ route('admin.userUpdate', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">

                    <input type="text" class="form-control my-3" name="name" value="{{ $user->name }} "
                        placeholder="name">
                </div>
                @error('name')
                    {{ $message }}
                @enderror

                <div class="col-12">

                    <input type="text" class="form-control my-3" name="email" value="{{ $user->email }} "
                        placeholder="email">
                </div>
                @error('email')
                    {{ $message }}
                @enderror
                <div class="col-12">


                    <input type="text" class="form-control my-3" name="phone" value="{{ $user->phone }} "
                        placeholder="phone">
                </div>
                @error('phone')
                    {{ $message }}
                @enderror
                <input type="submit" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection
