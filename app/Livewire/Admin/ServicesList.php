<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class ServicesList extends Component
{
    public function render()
    {
        $services = Service::orderBy('id', 'asc')->paginate(1);
        return view('livewire.admin.services-list', compact('services'));
    }
}

//class ServicesList extends Component
//{
//    use WithPagination;
//
//    protected $paginationTheme = 'bootstrap';
//    public $sortColumn = 'id';
//    public $sortDirection = 'asc';
//
//    public function render()
//    {
//        $this->dispatchBrowserEvent('contentChanged');
//        $services = Service::orderBy($this->sortColumn, $this->sortDirection)->paginate(5);
//        return view('livewire.admin.services-list', compact('services'));
//    }
//
//    public function sortBy($column)
//    {
//        if ($this->sortColumn === $column) {
//            $this->sortDirection = $this->swapSortDirection();
//        } else {
//            $this->sortDirection = 'asc';
//        }
//        $this->sortColumn = $column;
//    }
//
//    public function swapSortDirection()
//    {
//        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
//    }
//}
