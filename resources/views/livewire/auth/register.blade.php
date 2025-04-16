<div>
    <form wire:submit.prevent="register">
        <h3>MR MANAGER</h3>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" wire:model="name" name="name">

        @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror 
        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="username" wire:model="email" name="email">

        @error('email') <span class="error" style="color: red">{{ $message }}</span> @enderror 
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" wire:model="password" name="password">
        
        @error('password') <span class="error" style="color: red">{{ $message }}</span> @enderror 
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" wire:model="password_confirmation" id="password_confirmation" name="password_confirmation">
        
    @if (session('success'))
        <div class="alert alert-success" id="success-message">
            {{ session('success') }}
        </div>
    @endif
        <button type="submit">Register</button>
    </form>
</div>