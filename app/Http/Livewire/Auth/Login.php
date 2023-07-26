<?php

declare(strict_types=1);

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

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
            return redirect()->route('adminlte.dashboard');
        }

        $this->alert('error', 'Failed to Login', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Your Username or Password is wrong!.',
            'width' => '400',
        ]);
    }
}
