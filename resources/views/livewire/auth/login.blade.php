<div>
    
    <form wire:submit.prevent="login">
        @csrf
        <h3>MR MANAGER</h3>

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="username" wire:model="email" name="email">
        @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" wire:model="password" name="password">

    @if (session('success'))
        <div class="alert alert-success" id="success-message">
            {{ session('success') }}
        </div>
    @endif
        <button type="submit">Log In</button>
    </form>
</div>
