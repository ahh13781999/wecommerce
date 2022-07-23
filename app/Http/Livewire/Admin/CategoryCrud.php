<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryCrud extends Component
{
    use WithPagination;
    
    protected $listeners = ['deleteCategory','editCategoryTrigger','resetForm'];

    public $category_name;
    public $category_slug;

    public $Search = '';

    public $deletingCategoryId = '';
    public $editCategoryId = '';

    public $deleteModal = false;
    public $editModal = false;
    public $createModal = false;

    
    protected $rules = [
        'category_name' => ['required' ,'max:255','unique:categories,category_name'],
        'category_slug' => ['required' ,'max:255','unique:categories,category_slug'],
    ];

    protected $messages = [
        'category_name.required' => 'نام دسته بندی ضروری می باشد.',
        'category_slug.required' => 'اسلاگ دسته بندی ضروری می باشد.',
        'category_name.unique' => 'نام دسته بندی تکراری می باشد.',
        'category_slug.unique' => 'اسلاگ دسته بندی تکراری می باشد.',
    ];

    public function resetForm()
    {
       $this->category_name = '';
       $this->category_slug= '';
       $this->deletingCategoryId = '';
       $this->editCategoryId = '';
       $this->editModal = false;
    }


    public function generateSlug()
    {
      return $this->category_slug = Str::slug($this->category_name);
    }


    public function createCategory(){
        $this->validate();

        Category::create([
            'category_name' => $this->category_name,
            'category_slug' => $this->category_slug,
        ]);
       sleep(1);
       session()->flash('message','دسته بندی با موفقیت ایجاد شد!');
       $this->createModal = false;
       $this->resetForm();
    }

    public function editCategoryTrigger($editCategoryId)
    {
        $editCategory = Category::whereId($editCategoryId)->first();
        $this->category_name = $editCategory->category_name;
        $this->category_slug = $editCategory->category_slug;
        $this->editCategoryId = $editCategoryId;
        $this->editModal = true;
    }

    public function editCategory()
    {
        Category::whereId($this->editCategoryId)->update([
            'category_name' => $this->category_name,
            'category_slug' => $this->category_slug,
        ]);
        sleep(1);
        session()->flash('message','دسته بندی با موفقیت ادیت شد!');
        $this->resetForm();
        $this->editModal = false;
    }

    public function deleteCategory()
    {
      Category::findOrFail($this->deletingCategoryId)->delete();
      sleep(1);
      session()->flash('message','دسته بندی با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }

    public function render()
    {
        return view('livewire.admin.category-crud',["categories" => Category::Search($this->Search)->latest()->paginate(6)])->layout('layouts.admin');
    }
}
