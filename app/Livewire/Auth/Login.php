<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email'=>$this->email,'password'=>$this->password])) {
            return redirect()->route('home.view');
        }else {
            $this->addError('email','wrong Email or Password');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')
        ->layout('components.layouts.guest');
    }
}
