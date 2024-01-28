<?php

namespace App\Livewire\Admin;

use App\Models\Request;
use Livewire\Component;

class RequestsList extends Component
{
    public function render()
    {
        $requests = Request::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.requests-list', compact('requests'));
    }
}
