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
                        <form>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" />
                                <span>E-mail / Логин</span>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="password" placeholder="" />
                                <span>Пароль</span>
                            </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Забыли пароль?</a>
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">Вход</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/login.js"></script>
</body>

</html>
