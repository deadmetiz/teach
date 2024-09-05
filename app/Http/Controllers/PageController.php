<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }
    public function log()
    {
        return view('log');
    }
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    public function forgot()
    {
        return view('forgot');
    }
    public function forgotcode()
    {
        return view('forgotcode');
    }
    public function course()
    {
        return view('course');
    }
    public function profile()
    {

        return view('profile');
    }
    public function test()
    {
        return view('test');
    }
    public function teach()
    {
        return view('teach');
    }
    public function create_new_course()
    {
        return view('create_new_course');
    }

    public function create_new_language()
    {
        return view('create_new_language');
    }
    public function feedback()
    {
        return view('feedback');
    }
}
