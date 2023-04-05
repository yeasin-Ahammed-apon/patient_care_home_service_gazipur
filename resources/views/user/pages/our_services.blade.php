@extends('user.welcome')
@section('meta-tag')
OUR  SERVICES
@endsection
@section('content')
 {{-- OUR  SERVICES --}}
 <h1 class="text-center mt-5 our_popular_services">
    OUR  SERVICES
</h1>
<div class="container-fluid">
    <div class="our_popular_services_grid">
        {{-- card 1 --}}
        @foreach ($datas as $data )
        <div class="card m-4 shadow">
            <img src="{{ asset('admin/uploads/images/'.$data->image) }}"
                class="card-img-top img-fluid" alt="{{ $data->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text text-truncate">
                    {{ $data->description }}
                </p>
                <a href="{{ url('/'.$data->url) }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
