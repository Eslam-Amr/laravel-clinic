@extends('adminlte::page')
@section('content')
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
<h2 class="text-center my-5">Add Doctor</h2>
<div class=" alert-danger text-center my-5">

    @error('name')
    {{ $message }}
    <br>
    @enderror
    @error('email')
    {{ $message }}
    <br>
    @enderror
    @error('bio')
    {{ $message }}
    <br>
    @enderror
    @error('major')
    {{ $message }}
    <br>
    @enderror
</div>
<div class="container w-25 border m-auto mt-2">
    <form action="{{ route('admin.add') }}" method="post" class="form-group" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter email">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">bio</label>
            <textarea placeholder="enter bio"  class="form-control" name="bio" id="" cols="30" rows="10"></textarea>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">major</label>
            <input type="text" name="major" class="form-control" id="exampleFormControlInput1" placeholder="Enter major">

        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">insert image</label>
            <input type="file" name="image" class="form-control" id="exampleFormControlTextarea1"
            >

        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="add">
        </div>
    </form>
</div>
@endsection
