@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-4">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" style="width: 200px; height: 200px;" alt="">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1>{{ $user->username }}</h1>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="text-decoration-none">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="text-decoration-none">Edit Profile</a>
            @endcan

            <div class="d-flex pt-2">
                <div style="padding-right: 20px;"><strong>{{ $postCount }}</strong> Posts</div>
                <div style="padding-right: 20px;"><strong>{{ $followersCount }}</strong> Followers</div>
                <div style="padding-right: 20px;"><strong>{{ $followingCount }}</strong> Following</div>
            </div>
            <div class="pt-3"><b>{{ $user->profile->title }}</b></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-decoration-none">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 pt-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" style="width: 410px; height: 410px;" alt="">
                    <p>{{ $user->profile->title }}</p>
                </a>
            </div>
        @endforeach

    </div>

</div>
@endsection
