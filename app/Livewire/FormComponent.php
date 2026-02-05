<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormComponent extends Component
{

    #[Validate('required|email|min:10|max:30')]
    public string $email = "";

    #[Validate('required|min:5|max:30')]
    public string $name = "";

    #[Validate('required|min:6|max:30')]
    public string $password = "";

    public bool $user_created = false;

    public function render()
    {
        return view('livewire.form-component');
    }

    // #[On('user-created')] // Listener
    public function save()
    {
        $validated = $this->validate();
        $user = User::create($validated);
        $this->password = '';
        $this->user_created = true;
        $this->dispatch('user-created', $user->name); // Fire Event
    }

    public function updatedName($name)
    {
        if ($name == 'aaa') throw new Exception();
        $this->name = strtoupper($name);
    }

    public function updatingName($name)
    {
        if (str_contains($name, 'ASD')) {
            throw new Exception('Name contains ASD');
        }

        if (str_contains($name, 'ABC')) {
            throw new Exception('Name contains ABC');
        }
    }
}
