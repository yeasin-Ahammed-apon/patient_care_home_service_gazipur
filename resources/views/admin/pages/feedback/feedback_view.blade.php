@extends('admin.layout')
@section('meta-tag')
    Feed back view
@endsection
@section('content2')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Service Details</h3>
          </div>

            <div>
                <h1><b>Name:</b>{{ $data->name }}</h1>
                <h2><b>Feedback:</b> {{ $data->feedback }} </h2>
                <a class="btn btn-primary mt-2" href="{{ route('feedback_edit',['id'=>$data->id]) }}" >
                    Edit
                </a>
                <a class="btn btn-danger mt-2" href="{{ route('feedback_delete',['id'=>$data->id]) }}" >
                    Delete
                </a>
            </div>

    </div>

</div>
@endsection
