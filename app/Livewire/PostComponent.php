<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{

    public string $search = '';
    public $count = 0;

    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
