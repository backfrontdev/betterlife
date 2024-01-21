<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class ServicesList extends Component
{
    public function render()
    {
        $services = Service::orderBy('id', 'asc')->paginate(5);
        return view('livewire.admin.services-list', compact('services'));
    }
}
