<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserRead extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.admin.user-read');
    }
    
}
