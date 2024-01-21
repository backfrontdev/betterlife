<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateFormRequest;
use App\Http\Requests\ServiceUpdateFormRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.services.index', [
            'services' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceCreateFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateFormRequest $request, Service $service)
    {
        $validated = $request->validated();
        $service->name = $validated['name'];
        $service->description = $validated['description'];
        $service->price = $validated['price'];
        $service->save();
        return redirect(route('admin.services.index'))->with(['successNotify' => 'Услуга была изменена.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
