<?php

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
}