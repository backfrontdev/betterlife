<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateFormRequest;
use App\Http\Requests\ServiceUpdateFormRequest;
use App\Models\Service;

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
     * Store a newly created resource in storage.
     */
    public function store(ServiceCreateFormRequest $request)
    {
        $validated = $request->validated();
        $service = Service::create($validated);
        if ($service) {
            return redirect(route('admin.services.index'))->with([
                'successNotify' => 'Услуга успешно создана.'
            ]);
        }
        return redirect(route('admin.services.index'))->with([
            'errorNotify' => 'Произошла ошибка.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
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
        $service->short_description = $validated['short_description'];
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
        if ($service->delete()) {
            return redirect(route('admin.services.index'))->with([
                'successNotify' => 'Услуга была удалена.'
            ]);
        }
        return redirect(route('admin.services.index'))->with([
            'errorNotify' => 'Произошла ошибка.'
        ]);
    }
}
