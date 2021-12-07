<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Edit extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $matricule = '';

    /** @var string */
    public $role = '';

    /** @var string */
    public $email = '';

    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }
    
    public function store()
    {
        return redirect()->intended(route('home'));

        dd($this);
        $this->validate([
            'name' => ['required'],
            'matricule' => ['required'],
            'role' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::upda([
            'email' => $this->email,
            'matricule' => $this->matricule,
            'role' => $this->role,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->intended(route('home'));
    }
    
    public function render()
    {
        return view('livewire.users.edit', [
            'user' => $this->user
        ])->extends('layouts.auth');
    }
}
