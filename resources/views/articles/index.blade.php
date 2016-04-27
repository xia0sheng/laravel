@extends('app')
@section('content')
    <h1>这是index.blade.php</h1>
    @foreach($articles as $article)
        <h1><a href="articles/{{$article->id}}">{{$article->title}}</a></h1>
	<p>{{$article->content}}</p>
	<p>{{$article->published_at}}</p>
	<hr>
    @endforeach
@endsection
