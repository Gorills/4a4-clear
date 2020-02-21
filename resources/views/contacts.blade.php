@extends('layouts.app')


@section('title', 'Компания "А4" | Контакты')
@section('description', 'Адреса, контакты и схема проезда | компания "А4"')
@section('keywords', '')
@section('canonical', 'https://a4.click/contacts')
@section('og:url', 'https://a4.click/contacts')

@section('og:title', 'Компания "А4" | Контакты')
@section('og:description', 'Адреса, контакты и схема проезда | компания "А4"')
@section('twitter:description', 'Компания "А4" | Контакты')
@section('twitter:title', 'Адреса, контакты и схема проезда | компания "А4"')



@section('content')
    <div class="breadcamps-wrap bg-blue">
        <div class="container">
            <ul class="breadcamps">
                <li><a href="{{ url('/') }}" class="breadcamps__link">Главная</a></li>
                <li>-</li>
                <li class="breadcamps__link breadcamps__link_active">Контакты</li>
            </ul>
        </div>
    </div>
<div class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <h1 class="contacts__title">Как с нами связаться</h1>
            <p class="contacts__text"><i class="fa fa-map-marker pr-20" aria-hidden="true"></i> г.Томск, пр-т. Ленина 41</p>
            <a href="mailto:a4.click@mail.ru" class="contacts__text contacts__link" ><i class="fa fa-envelope pr-20" aria-hidden="true"></i> a4.click@mail.ru</a>
            <a href="tel:tel:83822344044" class="contacts__text contacts__link"><i class="fa fa-phone pr-20" aria-hidden="true"></i> 8 (3822) 34-40-44</a>
            <a href="tel:89832344044" class="contacts__text contacts__link"><i class="fa fa-phone pr-20" aria-hidden="true"></i> 8 (983) 234-40-44</a>
            <section class="callback" id="callback-form">
                <div class="container">
                    @include('form')
                </div>
            </section>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2204.23125474449!2d84.94958221581996!3d56.46377698074945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43269355e9655ebf%3A0x5f1a2214ba35f2a0!2z0L_RgC4g0JvQtdC90LjQvdCwLCA0MSwg0KLQvtC80YHQuiwg0KLQvtC80YHQutCw0Y8g0L7QsdC7LiwgNjM0MDM0!5e0!3m2!1sru!2sru!4v1582030598401!5m2!1sru!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


        </div>
    </div>
</div>



@endsection

