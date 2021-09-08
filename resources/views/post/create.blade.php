@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <h1>Add New Post</h1>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Post Caption</label>

                        <input id="name"
                               type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 pt-4">
                    <button class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
@endsection
