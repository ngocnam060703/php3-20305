@extends('layouts.main')

@section('title', 'Trang chủ website')

@section('content')
    @foreach ($posts as $post)
        <div>
            <a href="{{ route('posts.show', $post->id) }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <div><img src="{{ $post->image }}" width="100" alt=""></div>
            <div>{{ $post->content }}</div>
            <hr>
        </div>
    @endforeach
@endsection
