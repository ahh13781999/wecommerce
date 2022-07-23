<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class BrandCrud extends Component
{
    use WithPagination;

    public $listeners = ['deleteBrand','editBrandTrigger','resetForm'];

   public $brand_name; 
   public $brand_slug;
   public $brand_description;

   public $Search = '';

   public $editBrandId = '';
   public $deletingBrandId = '';

   public $editModal = false;
   public $createModal = false;
   public $deleteModal = false;

   protected $rules = [
    'brand_name' => ['required' ,'max:255','unique:brands,brand_name'],
    'brand_slug' => ['required' ,'max:255','unique:brands,brand_slug'],
    'brand_description' => ['required' ,'max:255'],
    ];

protected $messages = [
    'brand_name.required' => 'نام برند ضروری می باشد.',
    'brand_name.max' => 'نام برند بیشتر از حد می باشد.',
    'brand_slug.max' => 'اسلاگ برند بیشتر از حد می باشد.',
    'brand_slug.required' => 'اسلاگ برند ضروری می باشد.',
    'brand_description.required' => 'نوضیحات برند ضروری می باشد.',
    'brand_name.unique' => 'نام برند تکراری می باشد.',
    'brand_slug.unique' => 'اسلاگ برند تکراری می باشد.',
    'brand_description.max' => 'توضیحات برند بیشتر از حد می باشد'
];

public function resetForm()
{
   $this->brand_name = '';
   $this->brand_slug= '';
   $this->brand_description = '';
   $this->deletingBrandId = '';
   $this->editBrandId = '';
}


public function generateSlug()
{
  return $this->brand_slug = Str::slug($this->brand_name);
}


public function createBrand(){
    $this->validate();

    Brand::create([
        'brand_name' => $this->brand_name,
        'brand_slug' => $this->brand_slug,
        'brand_description' => $this->brand_description,
    ]);
   sleep(1);
   session()->flash('message','برند با موفقیت ایجاد شد!');
   $this->createModal = false;
   $this->resetForm();
}

public function editBrandTrigger($editBrandId)
{
    $editBrand = Brand::whereId($editBrandId)->first();
    $this->brand_name = $editBrand->brand_name;
    $this->brand_slug = $editBrand->brand_slug;
    $this->brand_description = $editBrand->brand_description;
    $this->editBrandId = $editBrandId;
    $this->editModal = true;
}

public function editBrand()
{
    Brand::whereId($this->editBrandId)->update([
        'brand_name' => $this->brand_name,
        'brand_slug' => $this->brand_slug,
        'brand_description' => $this->brand_description,

    ]);
    sleep(1);
    session()->flash('message','برند با موفقیت ادیت شد!');
    $this->resetForm();
    $this->editModal = false;
}

public function deleteBrand()
{
  Brand::findOrFail($this->deletingBrandId)->delete();
  sleep(1);
  session()->flash('message','برند با موفقیت حذف شد!');
  $this->deleteModal = false;
  $this->resetForm();
}



    public function render()
    {
        return view('livewire.admin.brand-crud',
        ['brands' => Brand::Search($this->Search)->latest()->paginate(8)]
        )->layout('layouts.admin');
    }
}
