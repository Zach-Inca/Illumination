@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method ('PATCH')
        <div class="row">
            <h1>Edit Profile</h1>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Bio:</label>
                    <input id="title" 
                    placeholder="A little about yourself" 
                    name="title" 
                    type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title') ?? $user->profile->title }}" 
                    autocomplete="title" autofocus>

                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description:</label>


                    <input id="description" placeholder="A little about your recipes" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                    @error('description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>        

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL:</label>


                    <input id="url" placeholder="Your URL" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Profile Photo</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>
</div>
@endsection

