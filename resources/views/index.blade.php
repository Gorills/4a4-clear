@extends('layouts.app')

@section('title', 'Услуги полиграфии для Вашего бинеса')
@section('description', 'Печать документов, поточное сканирование, копирование архивов и аутсорсинг печати в Томске')
@section('keywords', '')
@section('canonical', 'https://a4.click/')
@section('og:url', 'https://a4.click/')

@section('og:title', 'Услуги полиграфии для Вашего бинеса')
@section('og:description', 'Печать документов, поточное сканирование, копирование архивов и аутсорсинг печати в Томске')

@section('twitter:description', 'Печать документов, поточное сканирование, копирование архивов и аутсорсинг печати в Томске')
@section('twitter:title', 'Услуги полиграфии для Вашего бинеса')




@section('content')
    <section class="section bg-start mtop">
        <div class="container">
            <div class="section__inner">


                <h1 class="section__title">Услуги полиграфии для Вашего бизнеса</h1>
                <p class="section__text">Компания <b><?= (config('app.company')) ?></b> специализируется на аутсорсинге офисной печати, мы качественно и быстро
                    копируем архивные документы, надежно выполняем брошюрование, вовремя оцифруем ваши документы и архивы.</p>

                <div class="section__btn-block">
                    <a href="#uslugi" class="btn btn__accent">Подробнее</a>
                    <a href="" class="btn btn-white mleft popup-two">Заказать звонок</a>
                </div>


            </div>

        </div>
    </section>


    <section class="section-standart" id="uslugi">
        <div class="container">
            <div class="section-standart__inner">
                <p class="section-standart__suptitle">мы работаем для вашего бинеса</p>
                <h2 class="section-standart__title">наши услуги</h2>
                <div class="section-standart__grid">

                    <a href="{{ url('autsorsing-pechati') }}" class="section-standart__item">
                        <i class="fa fa-print" aria-hidden="true"></i>
                        <h2 class="section-standart__item-title">Аутсорсинг печати</h2>
                        <p class="section-standart__item-text">Это комплекс мер, позволяющих решить проблему бесперебойности и качества печати без необходимости содержать
                            штат специалистов по копировальной технике и печатные устройства на балансе Компании. </p>
                        <p class="section-standart__item-btn">Подробнее</p>
                    </a>
                    <a href="{{ url('potochnoe-skanirovanie') }}" class="section-standart__item">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        <h2 class="section-standart__item-title">Поточное сканирование</h2>
                        <p class="section-standart__item-text">Это возможность быстро перевести большое количество документации из бумажного архива в электронный вид.</p>
                        <p class="section-standart__item-btn">Подробнее</p>
                    </a>
                    <a href="{{ url('kopirovanie-arhivov') }}" class="section-standart__item">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <h2 class="section-standart__item-title">Копирование архивов</h2>
                        <p class="section-standart__item-text">Производственные мощности нашей компании позволяют копировать более 1000 страниц в минуту.</p>
                        <p class="section-standart__item-btn">Подробнее</p>
                    </a>
                    <a href="{{ url('pechat-dokumentov') }}" class="section-standart__item">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <h2 class="section-standart__item-title">Печать документов</h2>
                        <p class="section-standart__item-text">С нами Вы забудете что такое заправка картриджа и покупка офисной бумаги. Печать любых форматов и в любой цветности с нашей компанией гораздо выгоднее.</p>
                        <p class="section-standart__item-btn">Подробнее</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-standart bg-blue" id="about">
        <div class="container">
            <div class="section-standart__inner">
                <p class="section-standart__suptitle">несколько причин</p>
                <h2 class="section-standart__title">почему выбирают нас</h2>

                <div class="advantages__grid">
                    <div class="advantages__item">
                        <p class="advantages__one">01</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Качество</h3>
                            <p class="advantages__text">Мы следим за своим оборудованием, брак продукции сводится на нет.</p>
                        </div>
                    </div>
                    <div class="advantages__item">
                        <p class="advantages__one">02</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Техническая поддержка</h3>
                            <p class="advantages__text">Скорость технического обслуживания  занимает в среднем 30 минут</p>
                        </div>
                    </div>
                    <div class="advantages__item">
                        <p class="advantages__one">03</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Аутсорсинг</h3>
                            <p class="advantages__text">Компания <b><?= (config('app.company')) ?></b> является ответственным за печатный документооборот в вашей компании.</p>
                        </div>
                    </div>
                    <div class="advantages__item">
                        <p class="advantages__one">04</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Экономия</h3>
                            <p class="advantages__text">Вы не тратите бюджет компании на приобретение и расходные материалы к принтерам и МФУ.</p>
                        </div>
                    </div>
                    <div class="advantages__item">
                        <p class="advantages__one">05</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Выгода</h3>
                            <p class="advantages__text">Сокращение расходов компании до 70%.</p>
                        </div>
                    </div>
                    <div class="advantages__item">
                        <p class="advantages__one">06</p>
                        <div class="advantages_two">
                            <h3 class="advantages__title">Скорость</h3>
                            <p class="advantages__text">Мощностные характеристики показали, что мы способны обработать 100500 листов и напечатать 1050 в минуту.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <section class="section-standart">
        <div class="container">
            <div class="section-standart__inner">
                <p class="section-standart__suptitle"></p>
                <h2 class="section-standart__title">нас уже выбрали</h2>

                <div class="partners">
                    <a href="https://www.svea.com/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/1.png') }}" alt="">
                    </a>
                    <a href="https://www.creditexpress.ru/#home-slider" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/2.png') }}" alt="">
                    </a>
                    <a href="http://www.capitalica.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/3.png') }}" alt="">
                    </a>
                    <a href="https://rsvcollection.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/4.png') }}" alt="">
                    </a>
                    <a href="https://www.sibur.ru/TomskNeftehim/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/5.png') }}" alt="">
                    </a>
                    <a href="https://www.sibur.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/6.png') }}" alt="">
                    </a>
                    <a href="https://www.zavodsporta.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/7.png') }}" alt="">
                    </a>
                    <a href="https://www.micran.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/8.png') }}" alt="">
                    </a>
                    <a href="https://tomsk-tr.gazprom.ru/" class="partners__item">
                        <img class="partners__images" src="{{ URL::asset('images/partners/9.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="section-standart bg-blue">--}}
{{--        <div class="container">--}}
{{--            <div class="section-standart__inner">--}}
{{--                <p class="section-standart__suptitle">Качество наших услуг подтверждают</p>--}}
{{--                <h2 class="section-standart__title"> благодарственные письма</h2>--}}

{{--                <div class="reviews">--}}

{{--                    <div class="reviews__item">--}}
{{--                        <div class="reviews__container">--}}
{{--                            <img class="reviews__img minimized" src="{{ URL::asset('images/rewiews/1.png') }}" alt="">--}}
{{--                        <h2 class="section-standart__item-title">Клиент</h2>--}}
{{--                        <p class="section-standart__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eius ipsam nesciunt rerum ut? Architecto enim facilis inventore molestiae nesciunt optio quisquam repudiandae sequi! Adipisci consectetur culpa dolorem nisi suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quidem quo reprehenderit sequi velit voluptas! Aspernatur, eum soluta. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="reviews__item">--}}
{{--                        <div class="reviews__container">--}}
{{--                            <img class="reviews__img minimized" src="{{ URL::asset('images/rewiews/1.png') }}" alt="">--}}
{{--                            --}}{{--                        <h2 class="section-standart__item-title">Клиент</h2>--}}
{{--                            --}}{{--                        <p class="section-standart__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eius ipsam nesciunt rerum ut? Architecto enim facilis inventore molestiae nesciunt optio quisquam repudiandae sequi! Adipisci consectetur culpa dolorem nisi suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quidem quo reprehenderit sequi velit voluptas! Aspernatur, eum soluta. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="reviews__item">--}}
{{--                        <div class="reviews__container">--}}
{{--                            <img class="reviews__img minimized" src="{{ URL::asset('images/rewiews/1.png') }}" alt="">--}}
{{--                            --}}{{--                        <h2 class="section-standart__item-title">Клиент</h2>--}}
{{--                            --}}{{--                        <p class="section-standart__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eius ipsam nesciunt rerum ut? Architecto enim facilis inventore molestiae nesciunt optio quisquam repudiandae sequi! Adipisci consectetur culpa dolorem nisi suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quidem quo reprehenderit sequi velit voluptas! Aspernatur, eum soluta. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="reviews__item">--}}
{{--                        <div class="reviews__container">--}}
{{--                            <img class="reviews__img minimized" src="{{ URL::asset('images/rewiews/1.png') }}" alt="">--}}
{{--                            --}}{{--                        <h2 class="section-standart__item-title">Клиент</h2>--}}
{{--                            --}}{{--                        <p class="section-standart__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eius ipsam nesciunt rerum ut? Architecto enim facilis inventore molestiae nesciunt optio quisquam repudiandae sequi! Adipisci consectetur culpa dolorem nisi suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quidem quo reprehenderit sequi velit voluptas! Aspernatur, eum soluta. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <script>
        $(function(){
            $('.minimized').click(function(event) {
                var i_path = $(this).attr('src');
                $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
                $('#magnify').css({
                    left: ($(document).width() - $('#magnify').outerWidth())/2,
                    // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
                    top: ($(window).height() - $('#magnify').outerHeight())/2
                });
                $('#overlay, #magnify').fadeIn('fast');
            });

            $('body').on('click', '#close-popup, #overlay', function(event) {
                event.preventDefault();

                $('#overlay, #magnify').fadeOut('fast', function() {
                    $('#close-popup, #magnify, #overlay').remove();
                });
            });
        });

    </script>

@endsection
