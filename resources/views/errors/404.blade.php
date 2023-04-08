@extends('user.welcome')
@section('meta-tag')
    404 Page not found
@endsection
@section('content')
<style>
      .page-404 {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .page-404 h1 {
            font-size: 10rem;
            margin: 0;
            font-weight: bold;
            color: #212529;
        }
        .page-404 p {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #6c757d;
        }
        .page-404 a {
            font-size: 1.5rem;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .page-404 a:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
</style>
<div class="container-fluid">
    <div class="page-404">
        <div>
            <h1><i class="fas fa-exclamation-triangle"></i></h1>
            <p>The page you're looking for cannot be found.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Go Back Home</a>
        </div>
    </div>
</div>
@endsection
