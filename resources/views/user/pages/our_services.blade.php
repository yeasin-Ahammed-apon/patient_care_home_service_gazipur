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
    <div class="row">
        {{-- card 1 --}}
        @foreach ($datas as $data )
        <div class="col-12 col-sm-4">
            <div class="card m-4 shadow">
                <img src="{{ asset('admin/uploads/images/'.$data->image) }}"
                    class="card-img-top img-fluid" alt="{{ $data->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p class="card-text text-truncate">
                        {{ $data->short_description }}
                    </p>
                    <a href="{{ url('/'.$data->url) }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div  class=" d-flex justify-content-center align-items-center">
        <div aria-label="Page navigation example">
            <div class="pagination">
                {{ $datas->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
