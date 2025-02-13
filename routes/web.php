<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/home', function () {
    return Inertia::render('Welcome');
});

// Protect '/products' -> only Authenticated Users Can Access this
Route::middleware('auth')->get('/products', function () {
    return Inertia::render('Products');
});

Route::get('/questions', function () {
    return Inertia::render('Questions');
});

Route::middleware('guest')->get('/login', function () {
    return Inertia::render('LoginPage');
});

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/home');
    }

    return back()->withErrors(['password' => 'Invalid credentials, please try again.']);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // go back to LandingPage.vue
    return redirect('/');
});

