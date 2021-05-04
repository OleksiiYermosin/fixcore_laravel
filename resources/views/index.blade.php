<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="{{asset('../resources/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/css/bootstrap-grid.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="LogoAndText">
                <img src={{asset('img/Logo.svg')}} alt="LogoSL">
                <div class="LogoText">
                    <div class=LogoName>
                        FixCore
                    </div>
                    <div class=LogoDescription>
                        РЕМОНТ ПОБУТОВОЇ ТЕХНІКИ
                    </div>
                </div>
            </div>
            <ul class="menu">
                <li><a href="http://localhost/project/public/page=mainpage">Головна</a></li>
                <li><a href="http://localhost/project/public/page=services">Послуги</a></li>
                <li><a href="http://localhost/project/public/page=checkstatus">Статус ремонту</a></li>
                <li><a href="http://localhost/project/public/page=aboutus">Про компанію</a></li>
            </ul>
            <button class="BurgerMenu">
                <img src="img/menuburger.svg" alt="BurgerMenu">
            </button>
        </nav>

    </div>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="FooterContent">
            <div class="FirstFooterColumn">
                <div class="LogoAndText">
                    <img src={{asset('img/Logo.svg')}} alt="LogoSL">
                    <div class="LogoText">
                        <div class=LogoName>
                            FixCore
                        </div>
                        <div class=LogoDescription>
                            РЕМОНТ ПОБУТОВОЇ ТЕХНІКИ
                        </div>
                    </div>
                </div>
                <div class="forCopyright">
                    <div class="Copyright">
                        <img src="http://localhost/project/public/img/copyright.svg" alt="copyright">
                        <p>&nbsp;2021. Всі права захищені.</p>
                    </div>
                </div>

            </div>
            <div class="SecondFooterColumn">
                <div class="FooterColumnName">
                    <p>Юридична адреса</p>
                </div>
                <div class="FooterColumnContent">
                    <p>
                    <p>Україна, м. Київ,</p>
                    <p>вул. Неіснуюча, 9</p>
                    <p>80893</p>
                    </p>
                </div>
            </div>
            <div class="SecondFooterColumn">
                <div class="FooterColumnName">
                    <p>Контакти</p>
                </div>
                <div class="FooterColumnContent">
                    <p>+380661234567</p>
                    <p>+380687534214</p>
                    <p>+380633578624</p>
                </div>
            </div>
            <div class="SecondFooterColumn">
                <div class="FooterColumnName">
                    <p>Електронна адреса</p>
                </div>
                <div class="FooterColumnContent">
                    <p>info@fixcore.com</p>
                    <p>fixcore@gmail.com</p>
                </div>
            </div>

        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="js/menu.js"></script>
<script>
    function submit() {
        this.form.submit();
    }
</script>
</body>
</html>
