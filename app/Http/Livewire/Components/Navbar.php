<?php

declare(strict_types=1);

namespace App\Http\Livewire\Components;

use App\Traits\LogoutTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    use LogoutTrait;

    public $fullname;
    public $username;
    public $member_create;

    public function mount(): void
    {
        $this->fullname = Auth::User()->fullname;
        $this->username = Auth::User()->username;
        $this->member_create = Auth::User()->created_at;
        $this->role = Auth::User()->getRoleNames()->first();
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
