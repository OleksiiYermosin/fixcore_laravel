@extends('index')
@section('title')
    Ремонт котлів
@endsection
@section('content')
    <section class="FirstInfoPart">
        <div class="container">
            <div class="FirstInfoContent">
                <h1 class="MainHeadText">Ремонт котлів опалення</h1>
                <div class="WrapDiv">
                    <div class="InfoButtonCont">
                        <img class="InfoBG" src="img/informationalboiler/boiler.png" alt="TVBackground">
                        <a href="#">
                            <div class="InfoButton">
                                <p class="InfoWhiteText">Викликати майстра</p>
                            </div>
                        </a>
                    </div>
                    <div class="InfoIntro">
                        <div class="InfoIntroText">
                            <p class="BoldInfoText">Вартість послуги:</p>
                            <p class="SimpleInfoText">від 900 до 6000 грн;</p>
                            <p class="BoldInfoText">Менеджер:</p>
                            <p class="SimpleInfoText">+380687534214;</p>
                            <p class="BoldInfoText">Умови оплати:</p>
                            <p class="SimpleInfoText">передплата 25% (+ вартість нових деталей,
                                якщо вони потрібні); решта суми оплачується
                                після виконання замовлення за чеком;
                            </p>
                            <p class="BoldInfoText">Часи роботи:</p>
                            <p class="SimpleInfoText">з 8:00 до 19:00 без вихідних;</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section>
    <section class="SecondInfoPart">
        <div class=container>
            <div class="SecondInfoContent">
                <div class="SecondInfoBox">
                    <div class="SecondInfoTextBox">
                        <p class="InfoOrangeText">Не працює котел?</p>
                        <p class="InfoSimpleText">
                            Ми здійснюємо ремонт котлів будь-якого
                            виду і року випуску: котли, бойлери
                            і т.д. Везти котел до сервісного центру
                            не потрібно. Майстер приїде до вас додому в
                            будь-який район Києва або приміський населений
                            пункт і усуне проблему. Щоб відремонтувати
                            котел, вам треба лише подати нам заявку на
                            сайті, заповнивши просту форму, або зателефонувати.
                            Вам не доведеться окремо оплачувати послугу
                            виїзду майстра. Що стосується вартості робіт,
                            то вона визначається в залежності від складності
                            поломки і деяких інших чинників в процесі
                            діагностики техніки.
                        </p>
                    </div>
                </div>
                <div class="SecondInfoBox">
                    <div class="SecondInfoTextBox">
                        <p class="InfoOrangeText">Якість робіт гарантується</p>
                        <p class="InfoSimpleText">
                            Викликаючи майстра сервісного центру
                            <span style="font-weight: bold">FixCore</span>
                            для ремонту котла, ви можете бути впевнені,
                            що робота буде проведена бездоганно. Якщо в процесі
                            подальшої експлуатації до якості наших послуг
                            виникнуть питання, ви можете скористатися правом
                            на гарантійне обслуговування. Гарантія видається
                            на термін від 2 до 24 міс., а безкоштовний ремонт
                            здійснюється при виникненні в цей період повторної
                            поломки з вини майстра. Але даною послугою поки
                            скористалися менше 2% наших клієнтів Настільки добре
                            фахівці <span style="font-weight: bold">FixCore</span>
                            знають свою справу!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ThirdInfoPart">
        <div class="container">
            <p class="InfoSmallText">Ціни на ремонт</p>
            <div class="ThirdInfoContent">
                <div class=ThirdInfoColumn>
                    <div class="InfoIntro">
                        <div class="InfoIntroText">
                            <p class="SimpleInfoText">Заміна аноду - від 900 грн.</p>
                            <p class="SimpleInfoText">Заміна фланцю - від 900 грн.</p>
                            <p class="SimpleInfoText">Ремонт терморегулятору - від 1000 грн.</p>
                            <p class="SimpleInfoText">Ремонт системи управління - від 980 грн.</p>
                            <p class="SimpleInfoText">Заміна плати - від 1200 грн.</p>
                            <p class="SimpleInfoText">Ремонт клапану - від 2450 грн.</p>
                            <p class="SimpleInfoText">Ремонт блоків живлення - від 920 грн.</p>
                            <p class="SimpleInfoText">Заміна роздулися конденсаторів - від 900 грн.</p>
                            <p class="SimpleInfoText">Заміна інвертора - від 1030 грн.</p>
                            <p class="SimpleInfoText">Заміна термостату - від 1500 грн.</p>
                            <p class="SimpleInfoText">Заміна згорілих датчиків від 1000 грн.</p>
                            <p class="SimpleInfoText">Заміна прокладок - від 350 грн.</p>
                            <p class="SimpleInfoText"> Ремонт/установка нового нагрівача - від 2400 грн.</p>
                        </div>
                    </div>
                    <div class="InfoIntroText">
                        <p class="InfoOrangeText">Увага!</p>
                        <p class="BoldInfoText">В ціни, зазначені на сайті, не включена
                            вартість запчастин. Точна ціна ремонту залежить від виду
                            поломки і вартості запчастин для певної моделі телевізора.
                            На всі види робіт надається гарантія і видається акт виконаних
                            робіт на спеціальному бланку.
                        </p>
                    </div>
                </div>
                <div class=ThirdInfoColumn>
                    <img class="FirstInfoImg" src="img/informationalboiler/boilerrepair1.png" alt="FirstImage">
                    <img class="SecondInfoImg"src="img/informationalboiler/boilerrepair2.png" alt="SecondImage">
                </div>
            </div>
        </div>
    </section>
@endsection
