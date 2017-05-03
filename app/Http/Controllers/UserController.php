<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['posts']
        ]);
    }

    public function edit()
    {
        $user = auth()->user();

        return view('user.edit', compact('user'));
    }

    public function update(UserRequest $UserRequest)
    {
        $user = auth()->user();

        $user->name = request('name');
        $user->email = request('email');

        $user->save();

        session()->flash('message', 'Perfil actualizado');

        return back();
    }

    public function password()
    {
        return view('user.password');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'newPassword' => 'required',
            'repeatNewPassword' => 'required|same:newPassword'
        ]);

        $user = auth()->user();

        if (Hash::check(request('password'), $user->password)) {
            $user->fill([
                'password' => Hash::make(request('newPassword'))
            ])->save();

            session()->flash('message', 'Clave cambiada');
        } else {
            session()->flash('message', 'Clave actual incorrecta');
        }

        return back();
    }

    public function avatar()
    {
        return view('user.avatar');
    }

    public function storeAvatar()
    {
        $this->validate(request(), [
            'avatar' => 'required|mimes:jpeg,jpg,png|max:1000'
        ]);

        $user = auth()->user();
        $directory = 'avatars/' . $user->id;

        Storage::deleteDirectory($directory);

        $avatar = request()->file('avatar')->store($directory);
        $url = Storage::disk('s3')->url($avatar);

        $user->avatar = $url;
        $user->save();

        session()->flash('message', 'Avatar subido');
        return back();
    }

    public function posts(User $user)
    {
        $posts = $user->posts()->where('is_published', 1)->get();

        return view('post.publications', compact('posts'));
    }
}
