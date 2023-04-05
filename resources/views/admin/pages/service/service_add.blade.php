@extends('admin.layout')
@section('meta-tag')
    Add Service
@endsection
@section('content2')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Service</h3>
            </div>

            <form action="{{ route('service_create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                    <div class="form-group col-12 col-sm-6 ">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-12">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="summernote" rows="3"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label>Url</label>
                        <input type="text" name="url" class="form-control" placeholder="url">
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label>Select</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <img id="imagePreview" class="img-fluid" alt="image">
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
    $('#summernote').summernote({
      placeholder: 'Description',
      tabsize: 2,
      height: 100
    });
  </script>
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
