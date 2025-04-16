<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();
                
        session()->invalidate();
        session()->regenerateToken();
        
        return $this->redirect('/login', navigate: true);
    }
    public function render()
    {
        return view('livewire.components.logout-button');
    }
}
