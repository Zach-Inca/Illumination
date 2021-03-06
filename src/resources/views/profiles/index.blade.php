@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-xs-3 pr-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="height:200px;">
        </div>
        <div class="col-xs-6 pt-2">
            <div class="pb-3">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-2">
                        <div class="h4">{{ $user->name }}</div>

                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
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
                <div class="pr-5 pb-4"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5 pb-4"><strong>{{ $followerCount }}</strong> followers</div>
                <div class="pr-5 pb-4"><strong>{{ $followingCount }}</strong> following</div>
            </div>


            <p>
                <strong>{{$user->profile->title}}</strong></br>

                {{$user->profile->description}}</br>

                <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
            </p>
        </div>
    </div>

    <script src="https://d2t7inh1nap6m2.cloudfront.net/lex-web-ui-loader.min.js"></script>
    <script>
    var loaderOpts = {
        baseUrl: 'https://d2t7inh1nap6m2.cloudfront.net/',
        shouldLoadMinDeps: true
    };
    var loader = new ChatBotUiLoader.IframeLoader(loaderOpts);
    var chatbotUiConfig = {
            /* Example of setting session attributes on parent page
            lex: {
                sessionAttributes: {
                userAgent: navigator.userAgent,
                QNAClientFilter: ''
                }
            }
            */
            };
    loader.load(chatbotUiConfig)
        .catch(function (error) { console.error(error); });
    </script>

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