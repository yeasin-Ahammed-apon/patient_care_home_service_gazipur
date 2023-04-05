@extends('user.welcome')
@section('meta-tag')
    Contact US
@endsection
@section('content')
    <div class="container-fluid mt-2 mb-5">
        <div class="row ">
            <h1 class="text-center">Contact Us</h1>
            <div class="col-12  " style="margin: auto">
                <form action="{{ route('message') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-sm-6 col-12">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-6 col-12">
                            <label class="form-label">Phone number *</label>
                            <input type="tel" name="number" class="form-control">
                            @error('number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-6 col-12">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm-6 col-12">
                            <label class="form-label">Subject *</label>
                            <input type="text" name="subject" class="form-control">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" mb-3 col-sm-6 col-12">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" name="message" aria-label="With textarea"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>`
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
