<?php

use Livewire\Component;

new class extends Component {
    public int $count = 0;
    public string $name = '';

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
};
?>

<div class="shadow p-3">

    <h1 class="text-3xl">{{ $name }}</h1>
    <p>{{ $count }}</p>
    <button wire:click='increment'>+</button>
    <button wire:click='decrement'>-</button>

    <div wire:offline class="bg-red-200 text-red-700">
        You are offline

    </div>

    <button type="button" x-on:click="$wire.refresh()">Refresh</button>
    <livewire:reactive-counter-component :count="$count" lazy />
</div>
