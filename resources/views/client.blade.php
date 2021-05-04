<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Перевірити статус ремонту</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="{{asset('../resources/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/css/bootstrap-grid.css')}}" rel="stylesheet">
</head>
<body>
<?php require('formaccepted.php'); ?>
<section class="CheckPart">
    <div class="container">
        <div class="CheckContent">
            <h1 class="MainHeadText">Перевірити статус ремонту</h1>
            <div class="CheckIntro">
                <div class="CheckIntroText">
                    <p class="SimpleCheckText">На цій
                        сторінці ви можете подивитися які види техніки знаходяться в сервісі та яким  клієнтам належать
                    </p>

                </div>

            </div>
            @if(isset($clients))
            <div class='CheckIntro'>
                <div class='CheckIntroText'>
                    <p class='SimpleCheckText'>
                        Клієнти:
                        @foreach($clients as $r)
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp; Клієнт: {{$r->name}}
                        @endforeach
                    </p>
                </div>
            </div>
            @endif
            <form method="get" action="{{asset('/clients')}}">
                <div class="DivForm">
                    <input name="statusfield" type="text">
                    <input value="Перевірити" name="submitButton" type="button" onclick="submit()">
                </div>
            </form>
        </div>
    </div>
</section>
<?php require('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="http://localhost/project/public/js/menu.js"></script>
<script>
    function submit() {
        this.form.submit();
    }
</script>
</body>
</html>


