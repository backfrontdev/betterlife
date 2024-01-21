<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Validation\Rule;

class ServiceBookingForm extends Component
{
    public function render()
    {
        return view('livewire.user.service-booking-form');
    }

    public function submit()
    {
//        $this->validate([
////            'full_name' => Rule::when(!auth()->check(), ['required', 'string', 'regex:/^([а-яА-ЯЁё\-\s]+)$/u', 'max:70']),
////            'email' => Rule::when(!auth()->check(), ['required', 'string', 'email', 'max:30']),
////            'phone' => Rule::when(!auth()->check(), ['required', 'string', 'regex:/8[0-9]{10}/', 'max:11']),
////            'employee_id' => 'required|exists:employees,id',
////            'date' => 'required|date|after:yesterday',
//            'time' => ''
//        ]);

//        session()->flash('success', 'Запись успешно осуществлена.');
//
//        $this->addError('form', 'test.');

//        $booking = Booking::create([
//            'service_id' => $this->service->id,
//            'user_id' => auth()->id() ?? null,
//            'employee_id' => $this->employee_id,
//            'date' => $this->date,
//            'time' => $this->time,
//            'full_name' => $this->full_name,
//            'email' => $this->email,
//            'phone' => $this->phone
//        ]);
//
//        $this->reset(['full_name', 'email', 'phone', 'date', 'time']);
//        session()->flash('success', 'Запись успешно осуществлена.');
//

    }
}
