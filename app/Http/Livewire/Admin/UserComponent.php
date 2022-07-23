<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $Search  = '';

    public $deletingUserId = '';

    public $deleteModal = false;

    protected $listeners = ['deleteUser','resetForm'];
    
    public function editUser($edituserId)
    {
        if(User::whereId($edituserId)->first()->status === 1)
        {
            User::whereId($edituserId)->update([
                'status' => 0,
            ]);
        }
        else{
            User::whereId($edituserId)->update([
                'status' => 1,
            ]);
        }

        sleep(1);
        session()->flash('message','کاربر  با موفقیت ادیت شد!');
    }

    public function resetForm()
    {
       $this->deletingUserId = '';
    }

    public function deleteUser()
    {
      User::findOrFail($this->deletingUserId)->delete();
      sleep(1);
      session()->flash('message','کاربر با موفقیت حذف شد!');
      $this->deleteModal = false;
      $this->resetForm();
    }
    
    public function render()
    {
        return view('livewire.admin.user-component',
        ['users' => User::Search($this->Search)->latest()->paginate(8)]
        )->layout('layouts.admin');
    }
}
