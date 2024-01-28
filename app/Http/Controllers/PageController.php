<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public static function index() {
        $services = DB::table('services')->limit(3)->orderBy('price')->get();
        $reviews = Review::query()->where('verified_at', '<>', null)->get();
        return view('index', [
            'services' => $services,
            'reviews' => $reviews,
        ]);
    }

    public static function admin() {
        return view('admin.index');
    }

    public static function certificates()
    {
        return view('certificates');
    }
}
