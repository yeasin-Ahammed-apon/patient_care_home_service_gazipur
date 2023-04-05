@extends('admin.layout')
@section('meta-tag')
    View Service
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
                <h2><b>Status:</b> @if ($data->status===1)
                    Active
                @else
                    deactive
                @endif</h2>
                <h3> <b>Url:</b>"/{{ $data->url }}"</h3>
                <h3> <b>Description:</b></h3>
                 {!! $data->description !!}
                 <br>
                <a class="btn btn-primary mt-2" href="{{ route('service_edit',['id'=>$data->id]) }}" >
                    Edit
                </a>
                <a class="btn btn-danger mt-2" href="{{ route('service_delete',['id'=>$data->id]) }}" >
                    Delete
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
@section('scripts')
    <script>

    </script>
@endsection
