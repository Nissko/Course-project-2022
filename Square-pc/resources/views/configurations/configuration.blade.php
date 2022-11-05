@extends('layouts.layout')
@section('title', 'Конфигуратор')
@section('content')
    <main class="o-main">
        <section class="c-section-info">
            <div class="c-hero">
                <div class="c-hero_image">
                    <img class="o-media-wrapper" src="img/Conf.jpg" width="1920" height="1080">
                </div>

            </div>
            <div class="name_page-style">Конфигуратор</div>
        </section>
        <div class="content-legend container">
            <div>
                Конфигуратор системного блока SQUARE-PC поможет подобрать комплектацию ПК и проверить комплектующие на совместимость.<br>
                Выбирайте, сравнивайте характеристики, заказывайте дополнительные опции для создания конфигурации своей мечты!
            </div>

        </div>
        <div class="conf-flex-block container" >
            @foreach ($configuration as $conf)
                <a class="link-to-configurator" href="">
                    <div class="conf-block js-script-{{ $conf -> id }}" data-length="{{ count($configuration) }}">
                        <div class="conf-img-block">
                            <img class="conf-img js-script-img-{{ $conf -> id }}" src="../img/{{ $conf -> img }}.png" width="1920px" height="1080px">
                        </div>
                        <div class="conf_name-conf">
                            {{ $conf -> name }}
                        </div>
                        <div class="conf_desc-conf">
                            {{ $conf -> description }}
                        </div>

                    </div>
                </a>
            @endforeach
        </div>
    </main>
    <script>
        $length = $('.conf-block').data("length");
        console.log($length);
        //1 сборка
        $(".js-script-1").mouseenter(function() {
            $(this).css("box-shadow", "0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1)");
            $('.js-script-img-1').css("transform", "scale(1.1)");
        }).mouseleave(function(){
            $(this).css("box-shadow", "0px 0px 0px");
            $('.js-script-img-1').css("transform", "scale(1)");
        });
        //2 сборка
        $(".js-script-2").mouseenter(function() {
            $(this).css("box-shadow", "0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1)");
            $('.js-script-img-2').css("transform", "scale(1.1)");
        }).mouseleave(function(){
            $(this).css("box-shadow", "0px 0px 0px");
            $('.js-script-img-2').css("transform", "scale(1)");
        });
        //3 сборка
        $(".js-script-3").mouseenter(function() {
            $(this).css("box-shadow", "0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1)");
            $('.js-script-img-3').css("transform", "scale(1.1)");
        }).mouseleave(function(){
            $(this).css("box-shadow", "0px 0px 0px");
            $('.js-script-img-3').css("transform", "scale(1)");
        });
        //4 сборка
        $(".js-script-4").mouseenter(function() {
            $(this).css("box-shadow", "0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1)");
            $('.js-script-img-4').css("transform", "scale(1.1)");
        }).mouseleave(function(){
            $(this).css("box-shadow", "0px 0px 0px");
            $('.js-script-img-4').css("transform", "scale(1)");
        });
    </script>
@endsection
