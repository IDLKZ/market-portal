<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/login.css">
    @livewireStyles
</head>

<body class="background show-spinner">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">

                        <p class=" text-white h2">МАГИЯ В ДЕТАЛЯХ</p>

                        <p class="white mb-0">
                            Пожалуйста, введите логин или почту и пароль.
                            <br>У вас нет уч.записи ?
                            <a href="{{route("register")}}" class="text-dark">Зарегистрироваться!</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="Dashboard.Default.html">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">Войти</h6>
{{--                        {!! Form::open(['route' => 'auth']) !!}--}}
{{--                            <label class="form-group has-float-label mb-4">--}}
{{--                                {!! Form::text('login', null, ['class' => 'form-control']) !!}--}}
{{--                                <span>E-mail / Логин</span>--}}
{{--                            </label>--}}

{{--                            <label class="form-group has-float-label mb-4">--}}
{{--                                {!! Form::password('password', ['class' => 'form-control']) !!}--}}
{{--                                <span>Пароль</span>--}}
{{--                            </label>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <a href="#">Забыли пароль?</a>--}}
{{--                                {!! Form::submit('Вход', ['class' => 'btn btn-primary btn-lg btn-shadow']) !!}--}}
{{--                            </div>--}}
{{--                        {!! Form::close() !!}--}}
                        @livewire('auth.login-validate')
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@livewireScripts
<script src="js/login.js"></script>
</body>

</html>
