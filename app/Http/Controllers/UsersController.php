<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show(User $user)//参数User:隐性路由模型绑定
    {
        return view('users.show', compact('user'));
    }
}
