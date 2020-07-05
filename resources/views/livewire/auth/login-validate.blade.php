<div>
    <form wire:submit.prevent="submit">
        @if (session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <label class="form-group has-float-label mb-4">
            <input type="text" wire:model="login" class="form-control">
            <span>E-mail / Логин</span>
            @error('login') <span class="error">{{ $message }}</span> @enderror
        </label>

        <label class="form-group has-float-label mb-4">
            <input type="password" wire:model="password" class="form-control">
            <span>Пароль</span>
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </label>

        <input type="file" wire:model="img">
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary btn-lg btn-shadow">Вход</button>
        </div>
    </form>
</div>
