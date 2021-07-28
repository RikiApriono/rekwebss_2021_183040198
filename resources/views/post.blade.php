@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title}}</h1>

        {{-- <h5>{{ $post->author}}</h5> --}}

        {!! $post->body !!}
    </article>

    <a href="/blog">Back to posts</a>
@endsection