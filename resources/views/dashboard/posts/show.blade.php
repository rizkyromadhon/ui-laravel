@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4 col-lg-8">
            <div class="col-lg-8 my-3">
                <h1>{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>
            </div>
            {!! $post->body !!}
        </div>
    </div>
@endsection
