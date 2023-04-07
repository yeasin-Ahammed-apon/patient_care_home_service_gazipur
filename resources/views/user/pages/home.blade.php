@extends('user.welcome')
@section('meta-tag')
    Home
@endsection
@section('content')
<style>
    *{
        padding: 0%;
        margin: 0%
    }
</style>
    {{-- carousel --}}
    {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.argoconsulting.com/wp-content/uploads/2020/06/medical-devices-header-1600x400.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.argoconsulting.com/wp-content/uploads/2020/06/medical-devices-header-1600x400.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.argoconsulting.com/wp-content/uploads/2020/06/medical-devices-header-1600x400.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slide)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('admin/uploads/images/'.$slide->image) }}" alt="{{ $slide->title }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slide->title }}</h5>
                    <p>{{ $slide->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    {{-- OUR POPULAR SERVICES --}}
    <h1 class="text-center mt-5 our_popular_services">
        OUR POPULAR SERVICES
    </h1>
    <div class="container-fluid">
        <div class="row">
            {{-- card 1 --}}
            @foreach ($PopulerServices as $PopulerService )
          <div class="col-12 col-sm-4">
            <div class="card m-4 shadow ">
                <img src="{{ asset('admin/uploads/images/'.$PopulerService['service']->image) }}"
                    class="card-img-top" alt="{{ $PopulerService['service']->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $PopulerService['service']->title }}</h5>
                    <p class="card-text text-truncate">{{ $PopulerService['service']->short_description }}</p>
                    <a href="/{{ $PopulerService['service']->url }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
          </div>
            @endforeach
        </div>
    </div>
    {{-- WORK WITH US --}}
    <h1 class="text-center mt-5 our_popular_services">
        WORK WITH US
    </h1>
    <p class="text-center fs-3">
        We works with leading hospitals, experienced doctors, nurses, diagnostic centers and others to improve health
        outcomes for patients as well as profitability for our partners
    </p>
    <div class="container-fluid">
        <div class="our_popular_services_grid">
            {{-- card 1 --}}
            <div class="card m-4 shadow">
                <img src="https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/diverse-medical-professionals-1324292283.jpg?itok=u6xm9Z22"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fs-1 text-primary">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>

                </div>
            </div>
            {{-- card 1 --}}
            <div class="card m-4 shadow">
                <img src="https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/diverse-medical-professionals-1324292283.jpg?itok=u6xm9Z22"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fs-1 text-primary">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>

                </div>
            </div>
            {{-- card 1 --}}
            <div class="card m-4 shadow">
                <img src="https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/diverse-medical-professionals-1324292283.jpg?itok=u6xm9Z22"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fs-1 text-primary">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>

                </div>
            </div>
            {{-- card 1 --}}
            <div class="card m-4 shadow">
                <img src="https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/diverse-medical-professionals-1324292283.jpg?itok=u6xm9Z22"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fs-1 text-primary">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>

                </div>
            </div>
        </div>
    </div>
    {{-- WHAT OUR CLIENTS ARE SAYING --}}
    <h1 class="text-center mt-5 what_our_clients_are_saying">
        WHAT OUR CLIENTS ARE SAYING
    </h1>
    <div class="container-fluid">
        <div class="row">
            {{-- card 1 --}}
            @foreach ($feedbacks as $feedback)
            <div  class="col-12 col-sm-3">
                <div class="card m-4 shadow">
                    <img src="https://gcavocats.ca/wp-content/uploads/2018/09/man-avatar-icon-flat-vector-19152370-1.jpg"
                        class="card-img-top" alt="client feed back">
                    <div class="card-body">
                        <h5 class="card-title">{{ $feedback->name }}</h5>
                        <p class="card-text">
                        <h3 class="d-inline text-warning">"</h3>
                        {{ $feedback->feedback }}
                        <h3 class="d-inline text-warning">"</h3>
                        </p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
