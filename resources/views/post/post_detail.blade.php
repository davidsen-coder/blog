@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">My posts<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.form') }}">Create post</a>
                </li>
            </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1>{{ $post->title }} </h1>
            <div class="col-sm-8 blog-main">
                <p>{{ $post-> description }} </p>
            </div>
            <a href="{{ route('post.edit', ['id' => $post->id])}}">
                <button type="button" class="btn btn-warning btn-sm">Edit Post</button> </a>
            <a href="{{ route('post.delete', ['id' => $post->id])}}">
                <button type="button" class="btn btn-danger btn-sm">Delete Post</button> </a>
        </main>
    </div>
</div>
@endsection