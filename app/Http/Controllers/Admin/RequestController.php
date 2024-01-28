<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.requests.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Display the specified resource.
     */
    public function show($request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($request)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $formRequest)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
    }
}
