<div>
    @if ($user_created)
        <p style='color:green;'>
            User has been created
        </p>
    @endif
    <form wire:submit='save' class="bg-gray-400">
        <div>
            <label for="email">Email</label>
            <input type="email" wire:model='email' name="email" id="email" /><br />
            @error('email')
                <p style='color:red;'>{{ $message }}</p>
            @enderror
        </div><br />
        <div>
            <label for="name">Name</label>
            <input type="name" wire:model='name' name="name" id="name" /><br />
            @error('name')
                <p style='color:red;'>{{ $message }}</p>
            @enderror
        </div><br />
        <div>
            <label for="password">Password</label>
            <input type="password" wire:model='password' name="password" id="password" /><br />
            @error('password')
                <p style='color:red;'>{{ $message }}</p>
            @enderror
        </div><br />

        <button type="submit">Send</button>
    </form>
</div>
