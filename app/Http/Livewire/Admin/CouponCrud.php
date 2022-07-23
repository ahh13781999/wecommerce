<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class CouponCrud extends Component
{

    protected $listeners = ['deleteCoupon','editCouponTrigger','resetForm'];

    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;

    public $deletingCouponId = '';
    public $editCouponId = '';

    public $deleteModal = false;
    public $editModal = false;
    public $createModal = false;

    public $Search = '';

    protected $rules = [
        'code' => ['required' ,'max:255','unique:coupons,code'],
        'type' => ['required'],
        'value' => ['required','numeric'],
        'cart_value' => ['required','numeric'],
        'expiry_date' => ['required'],
    ];

    protected $messages = [
        'code.required' => 'کد کوپن ضروری می باشد.',
        'type.required' => 'نوع کوپن ضروری می باشد.',
        'value.required' => 'مقدار کوپن ضروری می باشد.',
        'cart_value.required' => 'مقدار خرید ضروری می باشد.',
        'expiry_date.required' => 'زمان انقضا ضروری می باشد.',
        'code.unique' => 'کد کوپن تکراری می باشد.',
    ];

    public function createCoupon(){
        $this->validate();

        Coupon::create([

            'code' => $this->code,
            'type' => $this->type,
            'value' => $this->value,
            'cart_value' => $this->cart_value,
            'expiry_date' => $this->expiry_date

        ]);
       sleep(1);
       session()->flash('message','کوپن با موفقیت ایجاد شد!');
       $this->createModal = false;
       $this->resetForm();
    }

    public function editCouponTrigger($editCouponId)
    {
        $editCoupon = Coupon::whereId($editCouponId)->first();
        $this->code = $editCoupon->code;
        $this->type = $editCoupon->type;
        $this->value = $editCoupon->value;
        $this->cart_value =  $editCoupon->cart_value;
        $this->expiry_date = $editCoupon->expiry_date;
        $this->editCouponId = $editCouponId;
        $this->editModal = true;
    }

    public function editCoupon()
    {
        Coupon::whereId($this->editCouponId)->update([

            'code' => $this->code,
            'type' => $this->type,
            'value' => $this->value,
            'cart_value' => $this->cart_value,
            'expiry_date' => $this->expiry_date

        ]);
        sleep(1);
        session()->flash('message','کوپن با موفقیت ادیت شد!');
        $this->resetForm();
        $this->editModal = false;
    }


    public function resetForm()
    {
    $this->code = '';
    $this->type = '';
    $this->value = '';
    $this->cart_value = ''; 
    $this->expiry_date = '';


    $this->deletingCouponId = '';
    $this->editCouponId = '';
    }


    public function deleteCoupon()
    {
        Coupon::findOrFail($this->deletingCouponId)->delete();
        sleep(1);
        session()->flash('message',' کوپن با موفقیت حذف شد!');
        $this->deleteModal = false;
        $this->resetForm();
    }
    public function render()
    {
        return view('livewire.admin.coupon-crud',
        ['coupons' => Coupon::Search($this->Search)->latest()->paginate(8)]
        )->layout('layouts.admin');
    }
}
