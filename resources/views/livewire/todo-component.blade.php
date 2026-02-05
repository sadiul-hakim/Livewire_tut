<div>
    <h1 x-text='$wire.todos.length'></h1>
    <button x-on:click='$wire.todos=[];$wire.$refresh()'>Clear</button>
    {{-- <form> --}}
    <input type="text" name='todo' id='todo' wire:model='todo' wire:keydown.enter='add' placeholder="Todo...." />
    <button wire:click='add' wire:confirm='are you sure?'>Add Todo</button>
    {{-- </form> --}}
    <p wire:loading.delay class="text-orange-500">Saving......</p>
    <ul>

        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
