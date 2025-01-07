<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public string $title = "";
    public string $body = "";
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function save()
    {
        $validatedData = $this->validate();

        $user = User::find(1);
        $user->posts()->create($validatedData);
        // dd($validatedData);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
