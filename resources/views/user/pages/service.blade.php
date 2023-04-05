@extends('user.welcome')
@section('meta-tag')
    Home
@endsection
@section('content')
<h1>{{ $data->title }}</h1>
{!! $data->description !!}
@endsection
