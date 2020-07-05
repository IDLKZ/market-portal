<div>

    <form wire:submit.prevent="submit">
        @if (session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-4">
            <div>
                <div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <button class="btn {{$seller}}" wire:click="changerole('seller')"> Продавец</button>
                        <button class="btn {{$client}}" wire:click="changerole('client')"> Клиент</button>
                    </div>
                </div>
            </div>
        </div>

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

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary btn-lg btn-shadow">Вход</button>
        </div>
    </form>


</div>

