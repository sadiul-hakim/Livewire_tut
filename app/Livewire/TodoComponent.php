<?php

namespace App\Livewire;

use Livewire\Component;

class TodoComponent extends Component
{
    public array $todos = [];
    public string $todo = '';

    public function render()
    {
        return view('livewire.todo-component');
    }

    public function add()
    {
        array_push($this->todos, $this->todo);
        // $this->todos[] = $this->todo;
        $this->todo = '';
    }
}
