<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function appMain() {
        return view('pages.appMain');
    }
    public function loginMain() {
        return view('pages.loginMain');
    }
}
