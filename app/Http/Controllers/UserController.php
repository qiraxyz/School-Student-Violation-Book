<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
}
