<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class SubCategoryCrud extends Component
{
    use WithPagination;

   protected $listeners = ['deleteSubCategory','editSubCategoryTrigger','resetForm'];

    public $categories;

    public $subcategory_name;
    public $subcategory_slug;
    public $category_id;

    public $Search = '';

    public $deletingSubCategoryId = '';
    public $editSubCategoryId = '';

    public $deleteModal = false;
    public $editModal = false;
    public $createModal = false;

    protected $rules = [
        'subcategory_name' => ['required' ,'max:255','unique:categories,category_name'],
        'subcategory_slug' => ['required' ,'max:255','unique:categories,category_slug'],
        'category_id' => ['required'],
    ];

    protected $messages = [
        'subcategory_name.required' => 'نام زیر دسته بندی ضروری می باشد.',
        'subcategory_slug.required' => 'اسلاگ زیر دسته بندی ضروری می باشد.',
        'subcategory_name.unique' => 'نام زیر دسته بندی تکراری می باشد.',
        'subcategory_slug.unique' => 'اسلاگ زیر دسته بندی تکراری می باشد.',
        'category_id.required' => 'انتخاب دسته بندی ضروری می باشد.',
    ];

    public function mount()
    {
       $this->categories = Category::orderBy('category_name','ASC')->get();
    }

    public function resetForm()
    {
       $this->subcategory_name = '';
       $this->subcategory_slug= '';
       $this->category_id= '';
       $this->deletingSubCategoryId = '';
       $this->editSubCategoryId = '';
       $this->editModal = false;
    }


    public function generateSlug()
    {
      return $this->subcategory_slug = Str::slug($this->subcategory_name);
    }


    public function createSubCategory(){
        $this->validate();

        SubCategory::create([
            'subcategory_name' => $this->subcategory_name,
            'subcategory_slug' => $this->subcategory_slug,
            'category_id' => $this->category_id,

        ]);
       sleep(1);
       session()->flash('message','زیر دسته بندی با موفقیت ایجاد شد!');
       $this->createModal = false;
       $this->resetForm();
    }

    public function editSubCategoryTrigger($editSubCategoryId)
    {
        $editSubCategory = SubCategory::whereId($editSubCategoryId)->first();
        $this->subcategory_name = $editSubCategory->subcategory_name;
        $this->subcategory_slug = $editSubCategory->subcategory_slug;
        $this->category_id = $editSubCategory->category_id;
        $this->editSubCategoryId = $editSubCategoryId;
        $this->editModal = true;
    }

    public function editSubCategory()
    {
        SubCategory::whereId($this->editSubCategoryId)->update([
            'subcategory_name' => $this->subcategory_name,
            'subcategory_slug' => $this->subcategory_slug,
            'category_id' => $this->category_id,
        ]);
        sleep(1);
        session()->flash('message','زیر دسته بندی با موفقیت ادیت شد!');
        $this->resetForm();
        $this->editModal = false;
    }

    public function deleteSubCategory()
    {
      Category::findOrFail($this->deletingSubCategoryId)->delete();
      sleep(1);
      session()->flash('message','دسته بندی با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }
    
    public function render()
    {
        return view('livewire.admin.sub-category-crud', 
        ['subcategories' => SubCategory::Search($this->Search)->latest()->paginate(8)]
        )->layout('layouts.admin');
    }
}
