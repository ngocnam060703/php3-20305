@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <div>
        <h2>{{ $post->title }}</h2>
        <div>Danh mục: {{ $post->name }} </div>
        <img src="{{ $post->image }}" width="100" alt="">
        <div>
            {{ $post->content }}
        </div>
    </div>
@endsection
