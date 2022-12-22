@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-7">
                <img src="/storage/{{ $post->image }}" style="width: 700px; height: 700px;" alt="">
                <div class="d-flex justify-content-between" style="padding-right: 60px;">
                    <div style="padding-right:20px;"><strong>200</strong> Like</div>
                    <div style="padding-right:20px;"><strong>50</strong> Comments</div>
                    <div><strong>25</strong> Share</div>
                </div>
            </div>
            <div class="col-5">
                <div>
                    <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                        <div class="d-flex align-items-center text-dark">
                            <div style="padding-right: 20px;">
                                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" style="height: 100px; width: 100px;">
                            </div>
                            <div class="d-flex">
                                <h2 class="text-dark">{{ $post->user->username }}</h2>
                                <a href="" class="text-decoration-none pt-1" style="font-size: 20px; padding: 20px;"><b>Follow</b></a>

{{--                                <form action="/p/{{ $post->id }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
                                    <a href="" class="text-decoration-none pt-1 btn btn-danger" style="font-size:20px; color: #ffffff; padding: 5px; height: 40px;"><b>Delete Post</b></a>
{{--                                </form>--}}

                            </div>
                        </div>
                    </a>
                </div>

                <div>
                    <hr>
                    <p>
                        <span>
                            <b><a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">{{ $post->user->username }}</a></b>
                        </span> {{ $post->caption }}
                    </p>
                </div>

                <hr>
                <div class="d-flex p-1 justify-content-between">
                    <a href="" style=""><div class="btn btn-primary">Like</div></a>
                    <a href="" style="padding-left: 20px;"><div class="btn btn-primary">Comment</div></a>
                    <a href="" style="padding-left: 20px;"><div class="btn btn-primary">Share</div></a>
                </div>

                <div class="pt-3" style="background-color:#fffff5">
                    <div>
                        <strong>Jhon Smith</strong>
                        <p>Great blog</p>
                    </div>
                    <div>
                        <strong>Ace Jane</strong>
                        <p>Thank you for your valuable information. This information help to me to think positive way in my life.</p>
                    </div>
                    <div>
                        <strong>Harry Chapin</strong>
                        <p>Thank you for your valuable information.</p>
                    </div>
                    <div>
                        <p><a href="">See more...</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
