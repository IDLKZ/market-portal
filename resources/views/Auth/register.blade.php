<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/login.css">
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
                            Уже есть аккаунт?
                            <br>Тогда Войдите в свою учетную запись!
                            <a href="{{route("login")}}" class="white">Вход!</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="Dashboard.Default.html">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">Регистрация</h6>
                        {!! Form::open(['route' => 'save-client','enctype' => 'multipart/form-data']) !!}
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <span>ФИО</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                <span>E-mail</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('login', null, ['class' => 'form-control']) !!}
                                <span>Логин</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                <span>Телефон</span>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                {!! Form::text('password', null, ['class' => 'form-control']) !!}
                                <span>Пароль</span>
                            </label>
                        <label class="form-group has-float-label mb-4">
                            {!! Form::file('img', null, ['class' => 'form-control']) !!}
                            <span style="top:-1.4em">Фото профиля (если есть)</span>
                        </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{route("login")}}">Уже есть аккаунт?</a>
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">Зарегистрироваться!</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/login.js"></script>
</body>

</html>
