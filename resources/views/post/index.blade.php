@extends('system.layout')

@section('title')
    {{ 'Posts list | birdBoard'}}
@endsection

@section('content')
<section class="container" style="margin-top: 30px">

    <h3 class="d-inline-block">Posts list</h3>
    <span class="ml-3 d-inline-block">
        <a href="/posts/create">Add +</a>
    </span>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titlet</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $post->title }}</td>
                <td class="w-50">{{ $post->body }}</td>
                <td>
                    <a href="{{ route('post.show', $post) }}">View</a> |
                    <a href="{{ route('post.edit', $post) }}">Edit</a> |
                    <a href="/posts/{{ $post->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection