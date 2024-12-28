<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebpageController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('web.profile', compact('user'));
    }
}
