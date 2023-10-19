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
<table class="table border-dark">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>subject</th>
            <th>message</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact )
        <tr>
            <th>{{ $contact->id }}</th>
            <th>{{ $contact->name }}</th>
            <th>{{ $contact->email }}</th>
            <th>{{ $contact->phone }}</th>
            <th>{{ $contact->subject }}</th>
            <th>{{ $contact->message }}</th>
            <th><button class="btn btn-danger "><a class="text-white" href="{{ route('admin.messageDelete',$contact->id) }}">Read</a></button></th>
        </tr>

        @endforeach
    </tbody>
</table>
{{ $contacts->links() }}
@endsection
