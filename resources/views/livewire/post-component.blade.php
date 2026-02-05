<div>
    <input type="search" wire:model.live="search" class="bg-gray-400 w-80 p-3" placeholder="search post" />

    <br />

    <ul>
        @forelse ($posts as $post)
            <li wire:key='{{ $post->id }}'>{{ $loop->iteration }}. {{ $post->title }}</li>
        @empty
            <li>No posts found</li>
        @endforelse
    </ul>
</div>
