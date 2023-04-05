@extends('user.welcome')
@section('meta-tag')
    Home
@endsection
@section('content')
<div class="container-fluid mt-5 mb-5">
    <div class="row ">
        <div class="col-12 col-sm-6  " style="margin: auto">
            <form action="{{ route('check') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">login</button>
                  </div>
              </form>
        </div>
    </div>
</div>



@endsection
