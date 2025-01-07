<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public string $title = "";
    public string $body = "";
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function store()
    {
        $validatedData = $this->validate();

        $user = User::find(1);
        $user->posts()->create($validatedData);
        // dd($validatedData);
        flash('Post berhasil di tambah', 'success');
        $this->reset();
    }
}
