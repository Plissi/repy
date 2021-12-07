<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::paginate(10)
        ])->extends('layouts.auth');
    }
}
