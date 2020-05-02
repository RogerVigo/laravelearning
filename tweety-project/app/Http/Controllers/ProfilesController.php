<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{


    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $user->update($attributes);

        return redirect($user->path());
    }

    public function update_avatar_user(User $user,Request $request)
    {
        if ($request->hasFile('avatar')){
            $filename=$request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatars',$filename,'public');

            $user->update(['avatar'=>$filename]);
        }
        return redirect($user->path());
    }

}
