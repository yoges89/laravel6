@extends('system.layout')

@section('title')
    {{ 'Create new post | birdBoard'}}
@endsection

@section('content')
<section class="container" style="margin-top: 30px">

    <h3 class="mb-5">Create a new post</h3>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="post title">
            @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
        <input name="slug" type="text" value="{{ old('slug') }}" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="body" id="description" class="form-control @error('body') is-invalid @enderror" cols="15" rows="6">{{ old('body') }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn-primary btn">Create</button>
    </form>
</section>
@endsection