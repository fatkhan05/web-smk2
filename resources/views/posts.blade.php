@extends('layouts.main')
@section('container')

<h1>Berita</h1>
@foreach ($posts as $post)
<article class="mb-5">
    <div class="card shadow mb-3 text-center border-primary" style="width: 16rem">
        <h2>
            <a href="/posts/{{$post['slug']}}"> {{ $post["title"]}}</a>
        </h2>
    </div>
    <div class="card card-body shadow border-primary">
        <h5>
            {{$post["author"]}}
        </h5>
        <p>{{$post["body"]}}</p>
    </div>
</article>

    
@endforeach
@endsection