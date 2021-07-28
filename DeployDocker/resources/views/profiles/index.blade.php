@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="height:150px;">
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-baseline  pt-5">
                <div>
                    <h1>{{ $user->name }}</h1>
                    @can('update', $user->profile)
                        <a href="/post/create">Create a new recipe</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan

            </div>
            <p>
                <strong>{{$user->profile->title}}</strong>
            </p>
            <p>
                {{$user->profile->description}}
            </p>
            <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
            <div class="d-flex">
                <div class="pt-5 pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-md-4 pb-4">
            @include('layouts/postbuild').
            <div float-right>
                <a href="posts/{{ $post->id }}/edit">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
    @endsection