<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="#dashboard">
                        <i class="iconsmind-Home"></i>
                        <span>Главная</span>
                    </a>
                </li>
                <li>
                    <a href="#companies">
                        <i class="iconsmind-Building"></i> Компании
                    </a>
                </li>
                <li>
                    <a href="#sellers">
                        <i class="iconsmind-Affiliate"></i> Продавцы
                    </a>
                </li>
                <li>
                    <a href="#clients">
                        <i class="simple-icon-people"></i> Клиенты
                    </a>
                </li>
                <li>
                    <a href="#categories">
                        <i class="simple-icon-layers"></i> Категории
                    </a>
                </li>
                <li>
                    <a href="#messages">
                        <i class="iconsmind-Post-Mail"></i> Рассылка
                    </a>
                </li>
                <li>
                    <a href="#forum">
                        <i class="iconsmind-Speach-Bubble"></i> Форумы
                    </a>
                </li>
                <li>
                    <a href="#cms">
                        <i class="iconsmind-Optimization"></i> CMS
                    </a>
                </li>
                <li>
                    <a href="{{route("logout")}}">
                        <i class="iconsmind-Aim"></i> Выход
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
{{--            Главная--}}
            <ul class="list-unstyled" data-link="dashboard">
                <li class="active">
                    <a href="Dashboard.Default.html">
                        <i class="simple-icon-rocket"></i> Default
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="simple-icon-pie-chart"></i>Analytics
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Ecommerce.html">
                        <i class="simple-icon-basket-loaded"></i> Ecommerce
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="simple-icon-doc"></i> Content
                    </a>
                </li>
            </ul>
{{--Компании--}}
            <ul class="list-unstyled" data-link="companies">
                <li>
                    <a href="{{route("companies")}}">
                        <i class="simple-icon-list"></i> Список компаний
                    </a>
                </li>

            </ul>
{{--Продавцы--}}
            <ul class="list-unstyled" data-link="sellers">
                <li>
                    <a href="Apps.MediaLibrary.html">
                        <i class="simple-icon-people"></i> Продавцы <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span>
                    </a>
                </li>
            </ul>
{{--Клиенты--}}
            <ul class="list-unstyled" data-link="clients">
                <li>
                    <a href="Ui.Alerts.html">
                        <i class="simple-icon-people"></i> Все клиенты
                    </a>
                </li>

            </ul>
{{--Категории--}}
            <ul class="list-unstyled" data-link="categories">
                <li>
                    <a target="_blank" href="LandingPage.Home.html">
                        <i class="simple-icon-grid"></i> Все категории
                    </a>
                </li>

            </ul>


        </div>
    </div>
</div>
