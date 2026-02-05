<?php

namespace App\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public function render()
    {
        sleep(5);
        return view('livewire.test-component');
    }
}
