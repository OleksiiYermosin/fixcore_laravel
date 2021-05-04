@extends('index')
@section('title')
    Перевірити статус ремонту
@endsection
@section('content')
    <section class="CheckPart">
        <div class="container">
            <div class="CheckContent">
                <h1 class="MainHeadText">Перевірити статус ремонту</h1>
                <div class="CheckIntro">
                    <div class="CheckIntroText">
                        <p class="SimpleCheckText">Шановні клієнти, на цій
                            сторінці ви можете перевірити статус ремонту вашої
                            техніки, ввівши номер телефону у
                            відповідне поле.
                        </p>

                    </div>

                </div>
                @if(isset($status))
                    <div class='CheckIntro'>
                        <div class='CheckIntroText'>
                            @for($i = 0; $i < count($status); $i++)
                                <p class='SimpleCheckText'>
                                    @foreach($status->get($i)->orders as $r)
                                        Інформація про замовлення: {{$r->name}}
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Дата початку ремонту: {{$r->order_date}}
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Дата приблизного закінчення ремонту: {{$r->deadline}}
                                        <br>
                                    @endforeach
                                </p>
                            @endfor
                        </div>
                    </div>
                @endif
                <form method="get" action={{asset('/check')}}>
                    <div class="DivForm">
                        <input name="statusfield" type="text">
                        <input value="Перевірити" name="submitButton" type="button" onclick="submit()">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
