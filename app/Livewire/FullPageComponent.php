<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Locked;
use Livewire\Component;

class FullPageComponent extends Component
{
    #[Locked]
    public int $id;
    public Post $post;
    public $posts;

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.full-page-component');
    }
}
