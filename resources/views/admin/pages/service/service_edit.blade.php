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

            <form action="{{ route('service_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                    <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                    <div class="form-group col-12 col-sm-6 ">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $data->title }}" class="form-control" placeholder="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-12">
                        <label>Description</label>
                        <textarea class="form-control"  name="description" id="summernote" rows="3">
                            {{ $data->description }}
                        </textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label>Url</label>
                        <input type="text" name="url" value="{{ $data->url }}" class="form-control" placeholder="url">
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
                        <label for="exampleInputFile">Select Image</label>
                        <img src="{{ asset('admin/uploads/images/'.$data->image) }}" id="imagePreviewOld"  class="img-fluid" alt="image">
                        <img id="imagePreview"  class="img-fluid" alt="image">
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

