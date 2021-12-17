<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;

        $postCount = $user->posts->count();
        $followerCount = $user->profile->followers->count();
        $followingCount = $user->following->count();

        return view('profiles.index', [
            'user' => $user,
            'follows' => $follows,
            'postCount' => $postCount,
            'followerCount' => $followerCount,
            'followingCount' => $followingCount,

        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => 'url',
            'image' => 'image',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));


        return redirect('/profile/' . auth()->user()->id);
    }
}
