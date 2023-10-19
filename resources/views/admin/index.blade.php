@extends('adminlte::page')
@section('content')
    <div class="container mt-5">
        <div class="col-12">
            <div class="row">
                <div class="col-6 mt-5">
                    <div class="col-8 text-center p-5 bg-dark">

                    <h2>add Doctor</h2>
                    <button class="btn btn-secondary mt-3"><a class="text-white" href="{{ route('admin.addDoctor') }}"> Control </a></button>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="col-8 text-center p-5 bg-dark">

                    <h2>add major</h2>
                    <button class="btn btn-secondary mt-3"><a class="text-white" href="{{ route('admin.addMajor') }}"> Control </a></button>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="col-8 text-center p-5 bg-dark">

                    <h2>users</h2>
                    <button class="btn btn-secondary mt-3"><a class="text-white" href="{{ route('admin.users') }}"> Control </a></button>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="col-8 text-center p-5 bg-dark">

                    <h2>Booking</h2>
                    <button class="btn btn-secondary mt-3"><a class="text-white" href="{{ route('admin.booking') }}"> Control </a></button>
                    </div>
                </div>
                <div class="col-12 mt-5 ">
                        <div class="col-4 text-center p-5 bg-dark">

                            <h2>Contact</h2>
                            <button class="btn btn-secondary mt-3"><a class="text-white" href="{{ route('admin.contact') }}"> Control </a></button>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection
