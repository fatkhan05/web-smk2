@extends('layouts.main')
@section('container')
<h1>Berita</h1>
<article>
    <h2>{{$post["title"]}}</h2>
    <h5>{{$post["author"]}}</h5>
    <p>{{$post["body"]}}</p>
</article>
<a href="/berita">Back to Blog</a>

@endsection