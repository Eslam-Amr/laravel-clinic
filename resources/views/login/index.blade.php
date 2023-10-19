@extends('layout.layout')
@section('title','login')
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
    <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
        <form class="form" action="{{ route('login.auth') }}">
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class=" col-6 bg-danger">

                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" name="password"  id="password" required>
            </div>
            <div class=" col-6  bg-danger">

                @error('password')
                {{ $message }}
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
            <span>don't have an account?</span><a class="link" href="{{ route('register.index') }}">create account</a>
        </div>
    </div>

</div>
</div>
@endsection
