<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function index() {
        return view('index');
    }

    public static function admin() {
        return view('admin.index');
    }
}
