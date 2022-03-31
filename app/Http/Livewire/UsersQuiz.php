<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersQuiz extends Component
{
    public $search;
    public function render()
    {
        $users=User::where('name','like','%'.$this->search.'%')
        ->orWhere('email','like','%'.$this->search.'%')
        ->get()
        ;//where('id','<>','1');
        return view('livewire.users-quiz',compact('users'));
        
    }
}
