<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admins()
    {
        return view('admin.user.admins');
    }

    public function create_admin()
    {
        return view('admin.user.createadmin');
    }
}
