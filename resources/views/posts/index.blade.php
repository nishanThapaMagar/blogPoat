@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row pt-5">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" style="width: 450px; height: 450px;" alt="">
                    </a>
                </div>
            </div>
            <div class="row pt-4 pb-2">
                <div class="col-6 offset-3">
                    <div>
                    <p>
                        <span>
                            <b><a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">{{ $post->user->username }}</a></b>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        @endforeach
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>

    </div>
@endsection
