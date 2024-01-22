<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public static function index() {
        $services = DB::table('services')->latest()->limit(3)->get();
        return view('index', [
            'services' => $services,
        ]);
    }

    public static function admin() {
        return view('admin.index');
    }
}
