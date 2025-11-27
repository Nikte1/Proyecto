<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function posts() {
        return view('posts');
    }

    public function media() {
        return view('media');
    }

    public function pages() {
        return view('pages');
    }

    public function settings() {
        return view('settings');
    }
}
