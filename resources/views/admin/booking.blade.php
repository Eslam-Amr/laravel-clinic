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
            <th>date</th>
            <th>doctor name</th>
            <th>status</th>
            <th>action</th>
            <th>status update</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking )
        <tr>
            <th>{{ $booking->id }}</th>
            <th>{{ $booking->name }}</th>
            <th>{{ $booking->email }}</th>
            <th>{{ $booking->phone }}</th>
            <th>{{ $booking->date }}</th>
            <th>{{ $booking->doctorName }}</th>
            <th>{{ $booking->status }}</th>
            <th><button class="btn btn-danger "><a class="text-white" href="{{ route('admin.bookingDelte',$booking->id) }}">Delete</a></button></th>
            <th>
                <button class="btn btn-warning "><a class="text-white" href="{{ route('admin.bookingpen',$booking->id) }}">pend.</a></button>
                <button class="btn btn-danger "><a class="text-white" href="{{ route('admin.bookingrej',$booking->id) }}">rej.</a></button>
                <button class="btn btn-success "><a class="text-white" href="{{ route('admin.bookingcomp',$booking->id) }}">comp.</a></button>
            </th>
        </tr>

        @endforeach
    </tbody>
</table>
{{ $bookings->links() }}
@endsection
