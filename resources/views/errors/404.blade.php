@extends('layouts.app')

@section('title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')
@section('description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('keywords', 'аутсорсинг печати, аренда офисной техники')
@section('canonical', '')
@section('og:title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')
@section('og:description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('og:url', 'Копирование')
@section('twitter:description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('twitter:title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')


@section('content')

    <div class="errors">
        <div class="container">
            <div class="errors__inner">
                <h1 class="errors__title"><span class="errors__red">404</span> Страница не найдена</h1>
                <p class="errors__text">Воможно вас заинтересуют другие страницы нашего сайта :)</p>

                    <a href="{{ url('autsorsing-pechati') }}" class="errors__link">Аутсорсинг печати</a>
                    <a href="{{ url('potochnoe-skanirovanie') }}" class="errors__link">Поточное сканирование</a>
                    <a href="{{ url('kopirovanie-arhivov') }}" class="errors__link">Копирование архивов</a>
                    <a href="{{ url('pechat-dokumentov') }}" class="errors__link">Печать документов</a>






            </div>
        </div>
    </div>



@endsection
