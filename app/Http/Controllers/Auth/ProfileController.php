<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'image' => 'required|image',
        ]);
    }

    public function show()
    {
        return view('profile', [
            'user' => @auth()->user(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'image' => 'required|image',
        ]);

        $user->update($data);

        return redirect()->route('profile')->with('status', 'Profile updated successfully!');
    }
}
