<div>
    <form wire:submit.prevent="submit">
        @if (session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Логин" wire:model="login">
            @error('login') <span class="text-warning">{{ $message }}</span> @enderror
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Пароль" wire:model="password">
            @error('password') <span class="text-warning">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Вход" class="btn float-right login_btn">
        </div>
    </form>
</div>
