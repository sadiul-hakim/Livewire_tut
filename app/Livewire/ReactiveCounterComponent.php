<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ReactiveCounterComponent extends Component
{
    #[Reactive]
    public int $count;
    public function render()
    {
        return view('livewire.reactive-counter-component');
    }
}
