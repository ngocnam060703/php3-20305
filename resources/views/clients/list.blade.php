@extends('layouts.main')

@section('title', $posts[0]->category->name ?? 'File not found')

@section('content')
    @foreach ($posts as $post)
        <div>
            <a href="{{ route('posts.show', $post->id) }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <div>Danh mục: {{ $post->category->name }}</div>
            <div><img src="{{ $post->image }}" width="100" alt=""></div>
            <div>{{ $post->content }}</div>
            <hr>
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection
