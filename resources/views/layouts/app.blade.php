<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />

    <meta property="og:url" content="@yield('og:url')" />
    <meta property="og:image" content="{{ URL::asset('images/social_image.jpg') }}" />

    <meta name="theme-color" content="#356797">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158856425-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158856425-1');
    </script>


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(57640789, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/57640789" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>
<body>
    <div class="toggle-menu" id="menu">
        <div class="toggle-section">
            <a href="#" class="menu-btn">
                <span></span>
            </a>
        </div>
    </div>

    <div class="callback-popup">
        <div class="container">
            @include('form')
        </div>
    </div>

    <header class="header">
       <div class="header__top">
           <div class="container header__justify">
               <div class="header__col">
                   <a href="mailto:a4.click@mail.ru" class="header__link-col">
                       <i class="fa fa-envelope" aria-hidden="true"></i>
                       a4.click@mail.ru
                   </a>
                    <a href="tel:344044" class="header__link-col">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       8 (3822) 344-044
                   </a>
                   <a href="tel:89832344044" class="header__link-col">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       8 (983) 234-40-44
                   </a>

               </div>

               <div class="header__col">
                   <div class="header__social">
                       <a href="https://api.whatsapp.com/send?phone=79832344044&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83..." class="header__link-col">
                           <i class="fa fa-whatsapp" aria-hidden="true"></i>
                       </a>
{{--                       <a href="" class="header__link-col">--}}
{{--                           <i class="fa fa-vk" aria-hidden="true"></i>--}}
{{--                       </a>--}}
{{--                       <a href="" class="header__link-col">--}}
{{--                           <i class="fa fa-instagram" aria-hidden="true"></i>--}}
{{--                       </a>--}}
                   </div>
                   <a href="" class="header__link-col mleft header__mobile-hide popup-one">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       Обратный звонок
                   </a>
               </div>
           </div>
       </div>
        <div class="header__bottom header__order">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img class="header__image" src="{{ URL::asset('images/logo.png') }}" alt=""></a>
                    </div>
                    <nav class="header__nav">
                        <a href="{{ url('/') }}" class="header__link">Главная</a>
                        <a href="{{ url('/#uslugi') }}" class="header__link">Услуги</a>
                        <a href="{{ url('/#about') }}" class="header__link">О компании</a>
                        <a href="{{ url('/contacts') }}" class="header__link">Контакты</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

@yield('content')




<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__item">
                <img class="footer__logo" src="{{ URL::asset('images/logo.png') }}" alt="">
{{--                    <img src="{{ URL::asset('images/logo.png') }}" alt="">--}}

            </div>
            <div class="footer__item">
                <h3 class="footer__title">Меню</h3>
                <a href="{{ url('/') }}" class="footer__link">Главная</a>
                <a href="{{ url('/#uslugi') }}" class="footer__link">Услуги</a>
                <a href="{{ url('/#about') }}" class="footer__link">О компании</a>
                <a href="{{ url('/contacts') }}" class="footer__link">Контакты</a>
            </div>
            <div class="footer__item ">
                <h3 class="footer__title">Услуги</h3>
                <a href="{{ url('autsorsing-pechati') }}" class="footer__link">Аутсорсинг печати</a>
                <a href="{{ url('potochnoe-skanirovanie') }}" class="footer__link">Поточное сканирование</a>
                <a href="{{ url('kopirovanie-arhivov') }}" class="footer__link">Копирование архивов</a>
                <a href="{{ url('pechat-dokumentov') }}" class="footer__link">Печать документов</a>
            </div>
            <div class="footer__item ">
                <h3 class="footer__title">Наши контакты</h3>
                <p class="footer__contacts"><i class="fa fa-map-marker pr-20" aria-hidden="true"></i> г.Томск, пр-т. Ленина 41</p>
                <a href="mailto:a4.click@mail.ru" class="footer__contacts footer__contacts_link"><i class="fa fa-envelope pr-20" aria-hidden="true"></i> a4.click@mail.ru</a>
                <a href="tel:tel:83822344044" class="footer__contacts footer__contacts_link"><i class="fa fa-phone pr-20" aria-hidden="true"></i> 8 (3822) 34-40-44</a>
                <a href="tel:89832344044" class="footer__contacts footer__contacts_link"><i class="fa fa-phone pr-20" aria-hidden="true"></i> 8 (983) 234-40-44</a>
            </div>
        </div>
    </div>
</footer>
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <script>
        $(".menu-btn").click(function(e) {
            e.preventDefault();
            $(this).toggleClass('menu-btn_active');
            $(".header").toggleClass('header_active');

        })
        $(".header__link").click(function(e) {
            // e.preventDefault();
            $(".menu-btn").removeClass("menu-btn_active");
            $(".header").removeClass("header_active");
        })
        $(".header").click(function(e) {
            // e.preventDefault();
            $(".menu-btn").removeClass("menu-btn_active");
            $(".header").removeClass("header_active");
        })

        $(".popup-one").click(function(e) {
            e.preventDefault();
            $(".callback-popup").toggleClass("callback-popup_active");
        })
        $(".popup-two").click(function(e) {
            e.preventDefault();
            $(".callback-popup").toggleClass("callback-popup_active");
        })


        $(".callback-popup__close").click(function(e) {
            // e.preventDefault();
            $(".callback-popup").removeClass("callback-popup_active");
        })

        // $(".callback-popup").click(function(e) {
        //     // e.preventDefault();
        //     $(".callback-popup").removeClass("callback-popup_active");
        // })


        $("body").on('click', '[href*="#"]', function(e){
            var fixed_offset = 60;
            $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
            e.preventDefault();
        });


        $(window).scroll(function() {
            var height = $(window).scrollTop();
            /*Если сделали скролл на 100px задаём новый класс для header*/
            if(height > 500){
                $('header').addClass('header-fixed');
            } else{
                /*Если меньше 100px удаляем класс для header*/
                $('header').removeClass('header-fixed');
            }
        });


        jQuery(document).ready(function($) {
            var url=document.location.href;
            $.each($(".header__nav a"),function(){
                if(this.href==url){
                    $(this).addClass('header__link_active');
                }
            });
        })(jQuery);
    </script>


    <script !src="{{ URL::asset('js/app.js') }}"></script>

    <script type="application/ld+json"> {

            "@context": "http://schema.org",

            "@type": "Organization",

            "name" : <?= (config('app.company')) ?>,

            "alternateName": "A4",

            "description": "Услуги полиграфии для бинеса",

            "url": "https://a4.click",

            "email": "a4.click@mail.ru",

            "legalName": "ООО «A4»",

            "logo": "https://a4.click/images/logo.png",

            "address": {

                "@type": "PostalAddress",

                "addressCountry": "RU",

                "addressLocality": "Томск",

                "addressRegion": "Томская область",

                "postalCode": "634034",

                "streetAddress": "пр-т. Ленина 41"

            },

            "telephone": "+73822344044"



        }


</body>
</html>
