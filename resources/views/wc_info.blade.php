@extends('index')
@section('title')
    Ремонт пилососів
@endsection
@section('content')
    <section class="FirstInfoPart">
        <div class="container">
            <div class="FirstInfoContent">
                <h1 class="MainHeadText">Ремонт пилососів</h1>
                <div class="WrapDiv">
                    <div class="InfoButtonCont">
                        <img class="InfoBG" src="img/informationalwc/imgWC2.jpg" alt="TVBackground">
                        <a href="#">
                            <div class="InfoButton">
                                <p class="InfoWhiteText">Викликати майстра</p>
                            </div>
                        </a>
                    </div>
                    <div class="InfoIntro">
                        <div class="InfoIntroText">
                            <p class="BoldInfoText">Вартість послуги:</p>
                            <p class="SimpleInfoText">від 400 до 3000 грн;</p>
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
                        <p class="InfoOrangeText">Не працює пристрій?</p>
                        <p class="InfoSimpleText">
                            Ми здійснюємо ремонт різноманітних пристроїв будь-якої
                            марки і року випуску. Везти зламаний апарат до сервісного центру
                            не потрібно. Майстер приїде до вас додому в
                            будь-який район Києва або приміський населений
                            пункт і усуне проблему. Щоб відремонтувати
                            пристрій, вам треба лише подати нам заявку на
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
                            для ремонту пристрою, ви можете бути впевнені,
                            що робота буде проведена бездоганно. Якщо в процесі
                            подальшої експлуатації до якості наших послуг
                            виникнуть питання, ви можете скористатися правом
                            на гарантійне обслуговування. Гарантія видається
                            на термін від 2 до 24 міс., а безкоштовний ремонт
                            здійснюється при виникненні в цей період повторної
                            поломки з вини майстра. Але даною послугою поки
                            скористалися менше 2% наших клієнтів - настільки добре
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
                            <p class="SimpleInfoText">Діагностика пилососу (сплачується тільки в разі відмови від ремонту). Без видачі акту - 155 грн.</p>
                            <p class="SimpleInfoText">Ремонт кабелю в пилососі - від 250 грн.</p>
                            <p class="SimpleInfoText">Заміна / ремонт механізму змотування кабелю - від 450 грн.</p>
                            <p class="SimpleInfoText">Заміна / ремонт кнопок - від 320 грн.</p>
                            <p class="SimpleInfoText">Заміна / ремонт плати управління - від 450 грн.</p>
                            <p class="SimpleInfoText">Заміна фільтрів в пилососі - 350 грн. + віртість запчастин</p>
                            <p class="SimpleInfoText">Заміна блоку циклона пилососа - від 550 грн.</p>
                            <p class="SimpleInfoText">Заміна контейнера для пилу в пилососі - 300 грн. + віртість запчастин</p>
                            <p class="SimpleInfoText">Заміна двигуна в пилососі - після діагостики</p>
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
                    <img class="FirstInfoImg" src="img/informationalwc/rep1.jpg" alt="FirstImage">
                    <img class="SecondInfoImg" src="img/informationalwc/rep2.jpg" alt="SecondImage">
                </div>
            </div>
        </div>
    </section>
@endsection
