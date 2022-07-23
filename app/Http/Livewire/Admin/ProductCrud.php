<?php

namespace App\Http\Livewire\Admin;

use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProductCrud extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $listeners = ['deleteProduct','editProductTrigger','resetForm','refresh'=>'$refresh'];

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $off_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $thumbnail_image;
    public $brand_id;
    public $sub_category_id;

    public $multiImages = [];

    public $Search = '';
   
    public $editProductId = '';
    public $deletingProductId = '';

    public $brands;
    public $subcategories;
    public $productattributes;

    public $Attr;
    public $Inputs = [];
    public $Attribute_Array = [];
    public $Attribute_Values = [];

    public $editModal = false;
    public $createModal = false;
    public $deleteModal = false;

    // Add more attributes
    public function addAttribute()
    {
       if(!in_array($this->Attr,$this->Attribute_Array))
       {
           array_push($this->Inputs,$this->Attr);
           array_push($this->Attribute_Array,$this->Attr);
       }
    }
    // Add more attributes

    // Remove attribute
    public function removeAttribute($Attr)
    {
        unset($this->Inputs[$Attr]);
    }
    // Remove attribute

    protected $rules = [

        'name'  => ['required','max:255','unique:products,name'],
        'slug'  => ['required','max:255','unique:products,slug'],
        'short_description' => ['required','max:1000'],
        'description' => ['required','max:2000'],
        'regular_price'  => ['required','max:255'],
        'off_price' => ['max:255'],
        'SKU'  => ['required','max:255'],
        'stock_status'  => ['required'],
        'featured' => ['sometimes'],
        'quantity'  => ['required'],
        'thumbnail_image' => ['required','max:4096','mimes:jpg,png,webp'],
        'brand_id' => ['required'],
        'sub_category_id' => ['required'],

    ];

    protected $messages = [
        'name.required' => 'نام ضروری می باشد.', 
        'slug.required' => 'اسلاگ ضروری می باشد.', 
        'short_description.required' => 'توضیح کوتاه ضروری می باشد.',
        'description.required' => 'توضیح طولانی ضروری می باشد.',
        'regular_price.required' => 'قیمت ضروری می باشد.',
        'SKU.required' => 'بارکد ضروری می باشد.', 
        'stock_status.required' => 'وضعیت محصول ضروری می باشد.',
        'quantity.required' => 'کمیت محصول ضروری می باشد.',
        'thumbnail_image.required' => 'تصویر اصلی ضروری می باشد.',
        'brand_id.required' => 'برند ضروری می باشد.',
        'sub_category_id.required' => 'زیردسته بندی ضروری می باشد.',
        'name.unique' => 'نام تکراری کی باشد',
        'slug.unique' => 'اسلاگ تکراری کی باشد',
        'thumbnail_image.max' => 'اندازه ی تصویر نمی تواند بیشتر از 4 مگابایت باشد.',
        'thumbnail_image.mimes' => 'فرمت تصویر قابل قبول نیست',
    ];

    public function generateSlug()
    {
       return $this->slug = Str::slug($this->name);
    }

    public function mount()
    {
        $this->brands = Brand::orderBy('brand_name','ASC')->get();
        $this->subcategories = SubCategory::orderBy('subcategory_name','ASC')->get();
        $this->productAttributes = ProductAttribute::orderBy('name','ASC')->get();
    }
     
    public function resetForm()
    {
        $this->name = '';
        $this->slug = '';
        $this->short_description = '';
        $this->description = '';
        $this->regular_price = '';
        $this->off_price = '';
        $this->SKU = '';
        $this->stock_status = '';
        $this->featured = '';
        $this->quantity = '';
        $this->thumbnail_image = '';
        $this->brand_id = '';
        $this->sub_category_id = '';
        $this->image_name = '';

        $this->editProductId = '';
        $this->deletingProductId = '';


        $this->Attr = '';
        $this->Inputs = [];
        $this->Attribute_Array = [];
        $this->Attribute_Values = [];
        
    }

    public function createProduct()
    {
        $this->validate();


       $product = Product::create([

            'name'  => $this->name,
            'slug'  => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'regular_price'  => $this->regular_price,
            'off_price' => $this->off_price,
            'SKU'  => $this->SKU,
            'stock_status'  => $this->stock_status,
            'featured' => $this->featured,
            'quantity'  => $this->quantity,
            'brand_id' => $this->brand_id,
            'sub_category_id' => $this->sub_category_id,

        ]);

        // Tumbnail Image
        $image_path = $this->thumbnail_image->storeAs('product_thumbnail',$product->id.'.webp');
        Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(384,384)->save();
        $image_name = explode('/',$image_path)[1];

        $product->update([
            'thumbnail_image'  => $image_name,
        ]);
        // Tumbnail Image

        //MultiImage Section
        foreach($this->multiImages as $image)
        {
            $image_path = $image->storeAs('product_images/'.$product->name,uniqid().'.webp');
            Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(700,700)->save();
            $image_name = explode('/',$image_path)[2];

            $product->images()->create([
                'product_id' => $product->id,
                'image_path' => $image_name,
            ]);
        }
        //MultiImage Section

        //Product Attributes Section
        foreach ($this->Attribute_Values as $key => $Attribute_Value) {
            
            $AttributeValues = explode(',',$Attribute_Value);
            foreach ($AttributeValues as $AttributeValue) {
                AttributeValue::create([
                      'product_id' => $product->id,
                      'product_attribute_id' => $key,
                      'value' => $AttributeValue,
                ]);
            }
        }
        //Product Attributes Section

        sleep(3);
        session()->flash('message','محصول با موفقیت ایجاد شد!');
        $this->createModal = false;
        $this->resetForm();
    }

    public function editProductTrigger($editProductId)
    {
        $editProduct = Product::whereId($editProductId)->first();

        $this->name = $editProduct->name;
        $this->slug = $editProduct->slug;
        $this->short_description = $editProduct->short_description;
        $this->description = $editProduct->description;
        $this->regular_price = $editProduct->regular_price;
        $this->off_price = $editProduct->off_price;
        $this->SKU = $editProduct->SKU;
        $this->stock_status = $editProduct->stock_status;
        $this->featured = $editProduct->featured;
        $this->quantity = $editProduct->quantity;
        $this->thumbnail_image = $editProduct->thumbnail_image;
        $this->brand_id = $editProduct->brand_id;
        $this->sub_category_id = $editProduct->sub_category_id;

        $this->editProductId = $editProductId;
       
        $this->editModal = true;
    }

    public function editProduct()
    {

        if(is_string($this->thumbnail_image))
        {
         $image_name = $this->thumbnail_image;
        }
        else{
        $image_path = $this->thumbnail_image->storeAs('product_thumbnail',$this->editProductId.'.webp');
        Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(384,384)->save();
        $image_name = explode('/',$image_path)[1];
        }

        Product::whereId($this->editProductId)->update([

            'name'  => $this->name,
            'slug'  => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'regular_price'  => $this->regular_price,
            'off_price' => $this->off_price,
            'thumbnail_image' => $image_name,
            'SKU'  => $this->SKU,
            'stock_status'  => $this->stock_status,
            'featured' => $this->featured,
            'quantity'  => $this->quantity,
            'brand_id' => $this->brand_id,
            'sub_category_id' => $this->sub_category_id,

        ]);

        sleep(3);
        session()->flash('message','محصول با موفقیت آپدیت شد!');
        $this->editModal = false;
        $this->resetForm();
    }

    public function deleteProduct()
    {
      $deletingProduct = Product::whereId($this->deletingProductId)->first();
      
      if(Storage::disk('product_thumbnail')->exists($deletingProduct->thumbnail_image))
      {
        Storage::disk('product_thumbnail')->delete($deletingProduct->thumbnail_image);
      }

      if(Storage::disk('product_images')->exists('/'.$deletingProduct->name))
      {
        Storage::disk('product_images')->deleteDirectory('/'.$deletingProduct->name);
      }

      $deletingProduct->delete();

      sleep(1);
      session()->flash('message','دسته بندی با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }

    public function render()
    {
        return view('livewire.admin.product-crud',
        [
            'products' => Product::Search($this->Search)->latest()->paginate(8),
            'productAttributes' => ProductAttribute::all(),
        ]
        )->layout('layouts.admin');
    }
}
