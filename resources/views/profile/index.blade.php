@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-5">
                <img style="width:180px; height:180px;" class=" rounded-circle" src="https://images.unsplash.com/photo-1631023064095-bc5b2c5613d0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" alt="profile img">
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
    <div class="container">
        <div class="row">
            <div class="col-md-4"><img class="w-100" src="https://images.unsplash.com/photo-1586227740560-8cf2732c1531?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1428&q=80" alt=""></div>
            <div class="col-md-4"><img class="w-100" src="https://images.unsplash.com/photo-1586227740560-8cf2732c1531?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1428&q=80" alt=""></div>
            <div class="col-md-4"><img class="w-100" src="https://images.unsplash.com/photo-1586227740560-8cf2732c1531?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1428&q=80" alt=""></div>
        </div>
    </div>
@endsection
