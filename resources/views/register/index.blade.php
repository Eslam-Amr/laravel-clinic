@extends('layout.layout')
@section('title','register')
@section('content')
<div class="container">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>
    @if(session()->has('message'))
<div class="alert alert-success" id="alert">

    {{ session()->get('message') }}
</div>
    <script type="text/javascript">
    document.ready(setTimeout(function(){
        document.getElementById('alert').remove()
    },3000))
    </script>
@endif
    <div class=" alert-danger text-center my-5">

        @error('name')
        {{ $message }}
        <br>
        @enderror
        @error('email')
        {{ $message }}
        <br>
        @enderror
        @error('password')
        {{ $message }}
        <br>
        @enderror
        @error('phone')
        {{ $message }}
        <br>
        @enderror
    </div>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{ route('register.addUser') }}">
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create account</button>
        </form>
        <div class="d-flex justify-content-center gap-2">
            <span>already have an account?</span><a class="link" href="{{ route('login.index') }}"> login</a>
        </div>
    </div>

</div>
@endsection
