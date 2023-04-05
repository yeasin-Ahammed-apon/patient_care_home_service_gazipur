@extends('admin.layout')
@section('meta-tag')
    Edit Populer Service
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Populer Service</h3>
            </div>

            <form action="{{ route('populer_service_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $PopulerService->id }}">
                <div class="form-group col-12 col-sm-6">
                    <label>Select</label>
                    <select class="form-control" name="service_id">
                        @foreach ($datas as $data)
                            @if ($data->id === $PopulerService->service_id)
                                <option value="{{ $data->id }}" selected>{{ $data->title }}</option>
                            @endif
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
