<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Image;

class HomeSliderCrud extends Component
{
    use WithPagination;
    use WithFileUploads;

   protected $listeners = ['deleteHomeSlider','editHomeSliderTrigger','resetForm'];

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public $Search = '';
    public $deletingHomeSliderId = '';
    public $editHomeSliderId = '';

    public $deleteModal = false;
    public $editModal = false;
    public $createModal = false;

    
    protected $rules = [
        'title' => ['required','max:255'],
        'subtitle' => ['required','max:255'],
        'price' => ['required'],
        'link' => ['required'],
        'image' => ['required','mimes:jpg,png,webp'],
        'status' => ['required'],
    ];

    protected $messages = [
        'title.required' => 'عنوان ضروری می باشد.',
        'subtitle.required' => 'زیر عنوان ضروری می باشد.',
        'price.required' => 'قیمت ضروری می باشد.',
        'link.required' => 'لینک ضروری می باشد.',
        'image.required' => 'نصویر ضروری می باشد.',
        'status.required' => 'وضعیت ضروری می باشد.',
    ];


    public function resetForm()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->price = '';
        $this->link = '';
        $this->image = '';
        $this->status = '';
        $this->deletingHomeSliderId = '';
        $this->editHomeSliderId = '';
    }

    public function createHomeSlider()
    {
        $this->validate();
        
        $homeSlider = HomeSlider::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'link' => $this->link,
            'status' => $this->status,
        ]);
        
        $image_path = $this->image->storeAs('home_slider',$homeSlider->id.'.webp');
        Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(1320,720)->save();        
        $image_name = explode('/',$image_path)[1];

        $homeSlider->update([
        
            'image' => $image_name,
            
        ]);

        sleep(1);
        session()->flash('message','اسلایدر با موفقیت ایجاد شد!');
        $this->createModal = false;
        $this->resetForm();
    }

    public function editHomeSliderTrigger($editHomeSliderId)
    {
        $editHomeSlider = HomeSlider::whereId($editHomeSliderId)->first(); 
        $this->title = $editHomeSlider->title;
        $this->subtitle = $editHomeSlider->subtitle;
        $this->price = $editHomeSlider->price;
        $this->link = $editHomeSlider->link;
        $this->image = $editHomeSlider->image;
        $this->status = $editHomeSlider->status;

        $this->editHomeSliderId = $editHomeSliderId;
        $this->editModal = true;
    }

    public function editHomeSlider()
    {
        if(is_string($this->image))
        {
            $image_name = $this->image;
        }
        else{
            $image_path = $this->image->storeAs('home_slider',$this->editHomeSliderId.'.webp');
            Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(1320,720)->save();        
            $image_name = explode('/',$image_path)[1];
        }

        HomeSlider::whereId($this->editHomeSliderId)->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'link' => $this->link,
            'image' => $image_name,
            'status' => $this->status,
        ]);
        sleep(1);
        session()->flash('message','اسلایدر با موفقیت ادیت شد!');
        $this->resetForm();
        $this->editModal = false;
    }

    public function deleteHomeSlider()
    {
      $deletingHomeSlider = HomeSlider::whereId($this->deletingHomeSliderId)->first();

      if(Storage::disk('home_slider')->exists($deletingHomeSlider->image))
      {
        Storage::disk('home_slider')->delete($deletingHomeSlider->image);
      }
      $deletingHomeSlider->delete();
      sleep(1);
      session()->flash('message','اسلایدر با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }



    public function render()
    {
        return view('livewire.admin.home-slider-crud',[
           'homesliders' => HomeSlider::Search($this->Search)->latest()->paginate(8),
        ])->layout('layouts.admin');
    }
}
