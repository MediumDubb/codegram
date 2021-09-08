@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-5">
            <img src="" alt="profile img">
        </div>
        <div class="col-md-8 d-flex flex-column p-5">
            <div><h1>{{ $user->username}}</h1></div>
            <div>
                <a href="#">Add Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3">
                    posts: <strong>173</strong>
                </div>
                <div class="pr-3">
                    followers: <strong> 2M</strong>
                </div>
                <div class="pr-3">
                    following:<strong>212</strong>
                </div>
            </div>
            <h2>{{$user->profile->title}}</h2>
            <p>{{ $user->profile->description }}</p>
            <div>
                <a href="httpd://www.google.com">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
