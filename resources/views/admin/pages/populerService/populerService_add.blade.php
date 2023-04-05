@extends('admin.layout')
@section('meta-tag')
    Add Populer Service
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
            </div>

            <form action="{{ route('populer_service_create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-12 col-sm-12">
                    <label>Select</label>
                    <select class="form-control" name="service_id">
                        @foreach ($datas as $data)
                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        </form>
    </div>
    </div>
@endsection
