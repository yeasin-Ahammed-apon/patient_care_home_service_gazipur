@extends('user.welcome')
@section('meta-tag')
    Home
@endsection
@section('content')
<div class="container-fluid border shadow rounded mt-1 mb-3 ">
    <div class="row" >
        <div class=" fs-3 bg-primary mb-1 text-center text-white">
            Service Details
          </div>
        <div class="col-12 col-sm-4 ">
            <img src="{{ asset('admin/uploads/images/'.$data->image) }}" class="img-fluid" alt="...">
        </div>
        <div class="col-12 col-sm-8 pb-5">
            <div class="card-body ">
                <h5 class="card-title fs-3 underline"><u>{{ $data->title }}</u></h5>
                {!! $data->description !!}
            </div>
        </div>
      </div>
</div>
@endsection
