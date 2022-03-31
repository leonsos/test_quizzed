<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersQuiz extends Component
{
    public function render()
    {
        $users=User::all();
        return view('livewire.users-quiz',compact('users'));
    }
}
