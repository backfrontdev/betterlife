<?php

namespace App\Livewire\User;

use App\Models\Review;
use Livewire\Component;

class CreateReviewForm extends Component
{
    public $service_name;
    public $review_body;
    public $user_name;
    public $user_work;

    public function render()
    {
        return view('livewire.user.create-review-form');
    }

    public function submit()
    {
        $validated = $this->validate([
            'service_name' => 'required|string',
            'review_body' => 'required|string',
            'user_name' => 'required|string',
            'user_work' => 'nullable|string',
        ]);
        Review::create($validated);
        session()->flash('formSuccess', 'Отзыв отправлен');
        $this->reset();
    }
}
