<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class ServicesList extends Component
{
    public $sortColumn = 'id';
    public $sortDirection = 'asc';

    public function render()
    {
        $services = Service::orderBy('id', 'asc')->paginate(5);
        return view('livewire.admin.services-list', compact('services'));
    }

    public function sortBy($column)
    {
        if($this->sortColumn === $column) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortColumn = $column;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
}
