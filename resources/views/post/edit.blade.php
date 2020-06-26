@extends('system.layout')

@section('title')
{{ 'Edit post | birdBoard'}}
@endsection

@section('content')
<section class="container" style="margin-top: 30px">

    <h3 class="mb-5">Edit {{ $post->title }}</h3>
    <form action="/posts/{{ $post->slug }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') ?? $post->title }}"
                class="form-control @error('title') is-invalid @enderror" id="title" placeholder="post title">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input name="slug" value="{{ old('slug') ?? $post->slug }}" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                placeholder="Slug">
            @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="body" id="description" class="form-control @error('body') is-invalid @enderror" cols="15"
                rows="6">{{ old('body') ?? $post->body }}</textarea>
            @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn-primary btn">Update</button>
        <a href="/posts" class="btn btn-warning">Cancel</a>
    </form>
</section>
@endsection