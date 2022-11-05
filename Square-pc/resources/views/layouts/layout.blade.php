<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQUARE | @yield('title', 'Главная страница')</title>
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- Скрипты для шаблонов -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script/scroll-top-menu.js"></script>
</head>
<body>
<nav class="navigation">
    <div class="menu_btn_top">
        <a href="/projects" class="project_btn">Наши проекты</a>
        <a href="/configurator" class="configurate_btn">Конфигуратор</a>
        <div class="logo-btn">
            <a class="legend-slogan" href="/"><text class="legend-slogan-text">SQUARE</text></a>
        </div>
        <a href="/info" class="aboutUs_btn">О нас</a>
        <a href="/cart" class="shoppingCart_btn">
            Корзина
        </a>
    </div>
</nav>
<div class="content">
        @yield('content')
</div>
<footer class="container">
    <nav class="">
        <p>2022 &copy;, Магнитогорск</p>
    </nav>
</footer>
</div>
</body>
</html>
