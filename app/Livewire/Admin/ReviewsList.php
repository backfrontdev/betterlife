<?php

namespace App\Livewire\Admin;

use App\Models\Review;
use Livewire\Component;

class ReviewsList extends Component
{
    public function render()
    {
        $reviews = Review::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.reviews-list', compact('reviews'));
    }
    public function decline($id)
    {
        Review::query()->where('id', $id)->update([
            'verified_at' => null,
        ]);
        $this->redirect(route('admin.reviews.index'));
    }
    public function accept($id)
    {
        Review::query()->where('id', $id)->update([
            'verified_at' => date('Y-m-d H:i:s'),
        ]);
        $this->redirect(route('admin.reviews.index'));
    }

}
