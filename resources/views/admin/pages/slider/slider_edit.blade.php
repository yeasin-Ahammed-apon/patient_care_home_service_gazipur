@extends('admin.layout')
@section('meta-tag')
    Slider edit
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
            </div>

            <form action="{{ route('slider_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                    <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                    <div class="form-group col-12 ">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $data->title }}" class="form-control" placeholder="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label>Description</label>
                        <textarea class="form-control"  name="description"   rows="3">{{ $data->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputFile">Select Image</label>
                        <div class="row">
                            <img src="{{ asset('admin/uploads/images/'.$data->image) }}" id="imagePreviewOld"  class="img-fluid col-6" alt="image">
                            <img id="imagePreview"  class="img-fluid col-6" alt="image">
                        </div>
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
        let imageInput = document.getElementById("imageInput");
        let imagePreview = document.getElementById("imagePreview");
        let imagePreviewOld = document.getElementById("imagePreviewOld");

        imageInput.addEventListener("change", () => {
            imagePreviewOld.remove();
            let file = imageInput.files[0];
            let reader = new FileReader();

            reader.addEventListener("load", () => {
                imagePreview.src = reader.result;
            });

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection

