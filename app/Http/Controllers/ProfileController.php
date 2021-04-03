<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function show(User $user)
    {

        return view('profiles.show', [
            'user'=> $user,
            'tweets'=>$user->tweets()->paginate(3),
        ]);
    }

    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {


        $attributes = request()->validate([
            'username' => ['required', 'max:255', 'string', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'max:255', 'string'],
            'avatar' => ['file'],
            'email' => ['required', 'max:255', 'string', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'max:255', 'string', 'min:8', 'confirmed'],
        ]);

        if(request('avatar')){
            $attributes['avatar']= request('avatar')->store('avatars');
        }
           

        $user->update($attributes);
        return redirect($user->path());
    }
}
