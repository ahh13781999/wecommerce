<?php

namespace App\Http\Livewire\User;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class UserProfileComponent extends Component
{
    use WithFileUploads;

    public $user;
    public $userProfile;

    public $firstname;
    public $lastname;
    public $email;
    public $line;
    public $city;
    public $province;
    public $address;
    public $zipcode;
    public $image;

    public function mount($user_id)
    {
        $this->user = User::whereId($user_id)->first();
        $this->userProfile = Profile::where('user_id',$user_id)->first();
        $this->firstname = $this->userProfile->firstname;
        $this->lastname = $this->userProfile->lastname;
        $this->email = $this->userProfile->email;
        $this->line = $this->userProfile->line;
        $this->city = $this->userProfile->city;
        $this->province = $this->userProfile->province;
        $this->address = $this->userProfile->address;
        $this->zipcode = $this->userProfile->zipcode;
        $this->image = $this->userProfile->image;
    }

    protected function rules()
    {
        return
        [
            'firstname' => ['required','max:255','string'], 
            'lastname' => ['required','max:255','string'], 
            'email' => ['required','max:255','email'], 
            'line' => ['required','numeric'], 
            'city' => ['required','max:255','string'], 
            'province' => ['required','max:255','string'], 
            'address' => ['required','max:255','string'], 
            'zipcode' => ['required','numeric'], 
            'image' => ['required','max:4096'], 
        ];
    }

    protected function messages()
    {
        return 
        [
            'firstname.required' => 'نام ضروری می باشد',
            'lastname.required' => 'نام خانوادگی ضروری می باشد',
            'email.required' => 'ایمیل ضروری می باشد',
            'line.required' =>  'شماره ضروری می باشد',
            'city.required' => 'شهر ضروری می باشد',
            'province.required' => 'استان ضروری می باشد',
            'address.required' => 'آدرس ضروری می باشد',
            'zipcode.required' => 'کد پستی ضروری می باشد',
            'image.required' => 'تصویر ضروری می باشد',
        ];
    }

    public function updateProfile()
    {
        $this->validate();

        if(is_string($this->image))
        {
         $image_name = $this->image;
        }
        else{
        $image_path = $this->image->storeAs('profile_photo',$this->user->id.'.webp');
        Image::make(storage_path('app/'.$image_path))->encode('webp')->resize(384,384)->save();
        $image_name = explode('/',$image_path)[1];
        }


        $this->user->profile->update([

            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'line' => $this->line,
            'city' => $this->city,
            'province' => $this->province,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'image' => $image_name,

        ]);

        session()->flash('message','پروفایل کاربر با موفقیت آپدیت شد');
    }

    public function render()
    {
        return view('livewire.user.user-profile-component')->layout('layouts.user');
    }
}
