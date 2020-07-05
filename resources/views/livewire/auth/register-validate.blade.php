<div>
    {!! Form::open(['enctype' => 'multipart/form-data','wire:submit.prevent'=>"submit"]) !!}
                            @if (session()->has('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('name', null, ['class' => 'form-control',"wire:model"=>"name" ]) !!}
                                <span>ФИО</span>
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::email('email', null, ['class' => 'form-control',"wire:model"=>"email"]) !!}
                                <span>E-mail</span>
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('login', null, ['class' => 'form-control',"wire:model"=>"login"]) !!}
                                <span>Логин</span>
                                @error('login') <span class="error">{{ $message }}</span> @enderror
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('phone', null, ['class' => 'form-control',"wire:model"=>"phone"]) !!}
                                <span>Телефон</span>
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                            </label>

                            <label class="form-group has-float-label mb-4">
                                {!! Form::password('password', ['class' => 'form-control',"wire:model"=>"password","type"=>"password"]) !!}
                                <span>Пароль</span>
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </label>
                        <label class="form-group has-float-label mb-4">
{{--                            {!! Form::file('img', null, ['class' => 'form-control',"wire:model"=>"img"]) !!}--}}
                            <input type="file" class="form-control" id="exampleInputName" wire:model="img">
                            <span style="top:-1.4em">Фото профиля (если есть)</span>
                            @error('img') <span class="error">{{ $message }}</span> @enderror
                        </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{route("login")}}">Уже есть аккаунт?</a>
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">Зарегистрироваться!</button>
                            </div>
                        {!! Form::close() !!}
</div>
