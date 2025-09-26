<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{

    public function createUser() {
        User::create([
            'name' => 'Nur Abyad',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
        ]); 
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page',
            'users' => User::all(),
        ]);
    }
}
