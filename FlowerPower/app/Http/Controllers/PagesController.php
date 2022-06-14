<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function toLogin() {
        return view('components/login');
    }
}
