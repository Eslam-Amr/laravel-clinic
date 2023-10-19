@extends('layout.layout')
{{-- @extends('adminlte::page') --}}
@section('title','contact')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    <div class=" alert-danger text-center my-5">

        @error('name')
        {{ $message }}
        <br>
        @enderror
        @error('email')
        {{ $message }}
        <br>
        @enderror
        @error('subject')
        {{ $message }}
        <br>
        @enderror
        @error('message')
        {{ $message }}
        <br>
        @enderror
        @error('phone')
        {{ $message }}
        <br>
        @enderror
    </div>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{ route('contact.add') }}">
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" name="message" id="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
@endsection
