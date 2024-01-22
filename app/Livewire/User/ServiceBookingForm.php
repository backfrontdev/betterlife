<?php

namespace App\Livewire\User;

use App\Models\Request;
use App\Models\Service;
use Livewire\Component;

class ServiceBookingForm extends Component
{
    public $name;
    public $phone;
    public $tg_account;

    public function render()
    {
        return view('livewire.user.service-booking-form');
    }

    public function mount()
    {
        $this->name = auth()->user()->name ?? '';
    }

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'tg_account' => 'required',
        ]);

        Request::create($validated);

        session()->flash('formSuccess', 'Отзыв отправлен');

        $this->reset();
    }
}
