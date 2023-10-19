@extends('layout.layout')
@section('title','doctor')
@section('content')
      <div class="container">
        <nav
          style="--bs-breadcrumb-divider: '>'"
          aria-label="breadcrumb"
          class="fw-bold my-4 h4"
        >
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="{{ route('doctor.index') }}">doctors</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              doctor name
            </li>
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

        <div class="d-flex flex-column gap-3 details-card doctor-details">
          <div class="details d-flex gap-2 align-items-center">
            <img
              src="{{ $doctor->image }}"
              class="img-fluid rounded-circle"
              height="150"
              width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
              <h4 class="card-title fw-bold">{{ $doctor->name}}</h4>
              <h6 class="card-title fw-bold">
                {{ $doctor->bio }}              </h6>
            </div>
          </div>
          <hr />
          <form class="form" action="{{ route('doctor.booking',$doctor->id) }}">
            <div class="form-items">
              <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="phone"
                  >Phone</label
                >
                <input type="tel" class="form-control" name="phone" id="phone" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="email"
                  >Email</label
                >
                <input type="email" class="form-control" name="email" id="email" required />
              </div>
            </div>
            <button type="submit" class="btn btn-primary">
              Confirm Booking
            </button>
          </form>
        </div>
      </div>
    </div>

    @endsection

