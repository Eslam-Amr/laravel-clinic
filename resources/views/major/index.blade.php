{{-- @dump($majors) --}}
@extends('layout.layout')
@section('title','major')
@section('content')
    <div class="page-wrapper">

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">majors</li>
                </ol>
            </nav>
            <div class="majors-grid">
            @foreach ($majors as $major )
            {{-- <img src="{{ asset('uplode/16975829631309017389.jpeg') }}" alt=""> --}}
            {{-- @dd($major->image[0]) --}}
            <div class="card p-2" style="width: 18rem;">
                <img src="{{$major->image[0]==='h'?  $major->image :  asset('uplode/' . $major->image) }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                    <a href="{{ route('major.majordoc',['id'=>$major->id]) }}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            @endforeach
            <div class="text-center mx-auto">

                {{ $majors->links() }}
            </div>
                {{-- <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div> --}}
            </div>

            {{-- <nav class="mt-5" aria-label="navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                < </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span aria-hidden="true"> > </span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </div>

@endsection

