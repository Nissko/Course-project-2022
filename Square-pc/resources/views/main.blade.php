@section('content')
    <main>
        <section class="c-section">
            <div class="c-hero-full-height">
                <div class="c-hero_video">
                    <video src="video/Video.m4v" preload="none" autoplay muted loop playsinline>
                    </video>
                    <a class="scroll-down" aria-label="Scroll to content" href="#content">
                        <svg width="16" height="46" viewBox="0 0 16 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8339 36.4667L8.92883 42.1303L8.92883 -3.09091e-07L7.2913 -3.8067e-07L7.29129 42.1064L1.36143 36.4667L0.195311 37.5899L8.11006 45.1174L16 37.5899L14.8339 36.4667Z" fill="white"></path>
                        </svg>
                    </a>
                </div>
                <div class="c-hero_container">
                    <div>Стильные корпуса, мощные комплектующие - найдите у нас все для компьютера мечты</div>
                    <div class="c-hero_container-btn">
                        <a class="buy-btn" href="">
                            Купить
                        </a>
                        <a class="more_info-btn" href="">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="content" class="container">
            <div>
                Контент
            </div>
        </section>
    </main>
@endsection
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQUARE | @yield('title', 'Главная')</title>
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <!-- Скрипты для главной страницы -->
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
<script src="script/scroll_to_content-menu.js"></script>
</body>
</html>
