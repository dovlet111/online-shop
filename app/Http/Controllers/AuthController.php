<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function signUp()
    {
        return view('auth.sign-up');
    }

    public function signIn(SignInFormRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return back()->withErrors([
                'email' => 'The provided credentials do nat match our records.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();
        return redirect()
            ->intended(route('home'));
    }
}
