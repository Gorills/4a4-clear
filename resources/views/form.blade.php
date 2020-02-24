<div class="callback__inner">
    <div class="close-block">
        <a href="#" class="callback-popup__close"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    <h2 class="callback__title">Заказать обратный звонок</h2>



{{--    @if(count($errors) > 0)--}}

{{--    @endif--}}

{{--    @if($message = Session::get('success'))--}}

{{--    @endif--}}

    <form action="{{ url('sendemail/send') }}" method="post" class="callback__form">
        {{ csrf_field() }}

        <input class="callback__input" name="name" type="text" placeholder="Имя" required>
        <input class="callback__input" name="tel" type="tel" placeholder="Телефон" required>
        <textarea class="callback__input" name="text" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
        <div class="politica">
            <input type="checkbox" required><span class="politica__text">Я согласен на обработку</span><a href="{{ url('politika') }}"> персональных данных</a>
        </div>

        <button value="Send" name="send" class="callback__btn btn btn__accent" type="submit">Отправить</button>
    </form>
</div>
