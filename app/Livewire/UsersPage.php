<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Users')]
class UsersPage extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users-page' , [
            'users' => User::paginate(1),
        ]);
    }
}
