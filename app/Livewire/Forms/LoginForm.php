<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    public string $email = "";
    public string $password = "";
    public $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function store()
    {

        $credentials = $this->validate();
        // dd('logged in');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records'
        ]);
    }
}
