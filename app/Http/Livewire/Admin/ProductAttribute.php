<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute as ProductAttributeModel;
use Livewire\Component;
use Livewire\WithPagination;

class ProductAttribute extends Component
{
    use WithPagination;
    
    protected $listeners = ['deleteProductAttribute','editProductAttributeTrigger','resetForm'];

    public $name;

    public $Search = '';

    public $deletingProductAttributeId = '';
    public $editProductAttributeId = '';

    public $deleteModal = false;
    public $editModal = false;
    public $createModal = false;

    
    protected $rules = [
        'name' => ['required' ,'max:255','unique:product_attributes,name'],
    ];

    protected $messages = [
        'name.required' => 'نام ویژگی محصول ضروری می باشد.',
        'name.unique' => 'نام ویژگی محصول تکراری می باشد.',
    ];

    public function resetForm()
    {
       $this->name = '';
       $this->deletingProductAttributeId = '';
       $this->editProductAttributeId = '';
       $this->editModal = false;
    }


    public function createProductAttribute(){
      
        $this->validate();

       ProductAttributeModel::create([
            'name' => $this->name,
        ]);
       sleep(1);
       session()->flash('message','ویژگی محصول با موفقیت ایجاد شد!');
       $this->createModal = false;
       $this->resetForm();
    }

    public function editProductAttributeTrigger($editProductAttributeId)
    {
        $editProductAttribute = ProductAttributeModel::whereId($editProductAttributeId)->first();
        $this->name = $editProductAttribute->name;
        $this->editProductAttributeId = $editProductAttributeId;
        $this->editModal = true;
    }

    public function editProductAttribute()
    {
        ProductAttributeModel::whereId($this->editProductAttributeId)->update([
            'name' => $this->name,
        ]);
        sleep(1);
        session()->flash('message','ویژگی محصول با موفقیت ادیت شد!');
        $this->resetForm();
        $this->editModal = false;
    }

    public function deleteProductAttribute()
    {
      ProductAttributeModel::findOrFail($this->deletingProductAttributeId)->delete();
      sleep(1);
      session()->flash('message','ویژگی محصول با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }

    public function render()
    {
        return view('livewire.admin.product-attribute',
        [
            "productAttributes" => ProductAttributeModel::Search($this->Search)->latest()->paginate(8)
        ])->layout('layouts.admin');
    }
}
