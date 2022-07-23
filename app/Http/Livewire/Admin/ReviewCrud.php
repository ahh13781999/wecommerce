<?php

namespace App\Http\Livewire\Admin;

use App\Models\Review;
use Livewire\Component;

class ReviewCrud extends Component
{
    public $deletingReviewId = '';

    public $deleteModal = false;

    public $Search = '';

    protected $listeners = ['deleteReview','resetForm'];

    public function resetForm()
    {
        $this->deletingReviewId = '';
    }

    public function deleteReview()
    {
      Review::findOrFail($this->deletingReviewId)->delete();
      sleep(1);
      session()->flash('message','نظر با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }

    public function render()
    {
        return view('livewire.admin.review-crud',[
            'reviews' => Review::Search($this->Search)->latest()->paginate(8),
        ])->layout('layouts.admin');
    }
}
