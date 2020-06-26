@extends('system.layout')

@section('content')
    <section class="container" style="margin-top: 30px">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
    </section>
@endsection