<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserChangePassword extends Component
{ 
    public $old_password;
    public $password;
    public $password_confirmation;


    protected function rules()
    {
        return 
        [            
            'old_password' => ['required','min:8'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' => ['required','min:8'],

        ];
    }

    protected function messages()
    {
        return
        [            
            'old_password.min' => 'حداقل تعداد کاراکتر 8 می باشد',
            'password.required' =>  'پسورد جدبد ضروری می باشد',
            'password_confirmation.required' =>  'تایید پسورد ضروری می باشد',
            'old_password.required' => 'پسورد فعلی ضروری می باشد',
            'password.min' =>  'حداقل تعداد کاراکتر 8 می باشد',
            'password_confirmation.min' =>  'حداقل تعداد کاراکتر 8 می باشد',
            'password_confirmation.confirmed' => 'پسورد ها منطبق نمی باشند',

        ];
    }

    public function changePassword()
    {
        $this->validate();

        if(Hash::check($this->old_password,auth()->user()->password))
        {
            $user = User::findOrFail(Auth::user()->id);
            $user->update([

              'password'  => Hash::make($this->password),
            
            ]);

            session()->flash('message','پسورد با موفقیت عوض شد');
        }
        else
        {
           session()->flash('message','پسورد اشتباه می باشد');
        }

    }

    public function render()
    {
        return view('livewire.user.user-change-password')->layout('layouts.user');
    }
}
