@extends('admin.layout')
@section('meta-tag')
    Feed back edit
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
            </div>

            <form action="{{ route('feedback_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                    <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                    <div class="form-group col-12 col-sm-6 ">
                        <label>Title</label>
                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label>Url</label>
                        <input type="text" name="feedback" value="{{ $data->feedback }}" class="form-control" placeholder="feedback">
                        @error('feedback')
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

