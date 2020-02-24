<div class="callback__inner">
    <div class="close-block">
        <a href="#" class="callback-popup__close"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    <h2 class="callback__title">Заказать обратный звонок</h2>
    <form action="{{ url('/send-mail') }}" class="callback__form" method="post">
        {{ csrf_field() }}
        <input name="name" class="callback__input" type="text" placeholder="Имя" required>
        <input name="tel" class="callback__input" type="tel" placeholder="Телефон" required>
        <textarea class="callback__input" name="msg" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
        <div class="politica">
            <input type="checkbox" required><span class="politica__text">Я согласен на обработку</span><a href="{{ url('politika') }}"> персональных данных</a>
        </div>

        <button class="callback__btn btn btn__accent" type="submit">Отправить</button>
    </form>






</div>
