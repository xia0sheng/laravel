@extends('app')
@section('content')
    <h1>{{$article->title}}</h1>
    <hr>
    <p>{{$article->content}}</p>
@endsection
