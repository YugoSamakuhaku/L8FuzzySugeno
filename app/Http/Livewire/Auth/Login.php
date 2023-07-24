<?php

declare(strict_types=1);

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.login-layout')->slot('slot');
    }

    public function login()
    {
        $credentials = $this->validate();

        if(Auth::attempt(['username' => $credentials['username'], 'password'=> $credentials['password']])) {
            return redirect()->route('blank');
        }

        return redirect()->route('auth.login');
    }
}
