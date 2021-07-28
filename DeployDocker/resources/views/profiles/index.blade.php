@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-5">
            <img src="{{ asset('img/cham.jpg') }}" alt="" class="rounded-circle" style="height:150px;">
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div>
                    <h1>{{ $user->name }}</h1>
                </div>
                <a href="/post/create">Create a new recipe</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            </div>

        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-md-4 pb-4">
                @include('layouts/postbuild')
            </div>
        @endforeach
    </div>
    @endsection