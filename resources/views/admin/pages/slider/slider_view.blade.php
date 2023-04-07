@extends('admin.layout')
@section('meta-tag')
    Slider view
@endsection
@section('content2')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Service Details</h3>
          </div>
          <div class="row" >
            <div class="col-sm-2 col-12 mb-4 ps-1">
                <img src="{{ asset('admin/uploads/images/'.$data->image) }} " class="img-fluid" alt="{{ $data->title }}">
            </div>
            <div class="col-sm-10 col-12 mb-4">
                <h1><b>Title:</b>{{ $data->title }}</h1>
                <h3> <b>Description:</b></h3>
                 {{  $data->description  }}
                 <br>
                <a class="btn btn-primary mt-2" href="{{ route('slider_edit',['id'=>$data->id]) }}" >
                    Edit
                </a>
                <a class="btn btn-danger mt-2" href="{{ route('slider_delete',['id'=>$data->id]) }}" >
                    Delete
                </a>
            </div>
        </div>

    </div>

</div>
@endsection

