@extends('admin.layout')
@section('meta-tag')
    Slider add
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
            </div>
            <form action="{{ route('slider_create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                    <div class="form-group col-12 col-sm-12 ">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-12">
                        <label>Description</label>
                        <textarea class="form-control" name="description"  rows="3"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-12">
                        <div class="row">
                            <img id="imagePreview" class="img-fluid col-6" alt="image">
                        </div>
                        <label for="exampleInputFile">Select Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" accept=".jpg,.jpeg,.png" class="custom-file-input"
                                    id="imageInput">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                        @error('image')
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
@section('scripts')
    <script>
        const imageInput = document.getElementById("imageInput");
        const imagePreview = document.getElementById("imagePreview");
        imageInput.addEventListener("change", () => {
            const file = imageInput.files[0];
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                imagePreview.src = reader.result;
            });
            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
