@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="height:150px;">
        </div>
        <div class="col-xs-6 pt-5">
            <div class="pb-3">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex">
                        <h3>{{ $user->name }}</h3>

                        <follow-button>
                        </follow-button>
                    </div>

                    @can('update', $user->profile)
                    <a href="/post/create">Create a new recipe</a>
                    @endcan

                </div>

                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>


            <div class="d-flex">
                <div class="pr-4 pb-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4 pb-4"><strong>54</strong> posts</div>
                <div class="pr-4 pb-4"><strong>32</strong> posts</div>
            </div>


            <p>
                <strong>{{$user->profile->title}}</strong></br>

                {{$user->profile->description}}</br>

                <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
            </p>
        </div>
    </div>


    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-lg-4 pb-4">
            @include('layouts/postbuild').
            <div float-right>
                <a href="posts/{{ $post->id }}/edit">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection