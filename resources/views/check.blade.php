<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Перевірити статус ремонту</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="../../resources/css/styles.css" rel="stylesheet">
    <link href="../../resources/css/bootstrap-grid.css" rel="stylesheet">
</head>
<body>
<?php require('formaccepted.php'); ?>
<section class="CheckPart">
    <div class="container">
        <div class="CheckContent">
            <h1 class="MainHeadText">Перевірити статус ремонту</h1>
            <div class="CheckIntro">
                <div class="CheckIntroText">
                    <p class="SimpleCheckText">Шановні клієнти, на цій
                        сторінці ви можете перевірити статус ремонту вашої
                        техніки, ввівши номер телефону або номер замовлення у
                        відповідне поле.
                    </p>

                </div>

            </div>
            <div class='CheckIntro'>
                <div class='CheckIntroText'>
                    <p class='SimpleCheckText'>Статус вашого змовлення: {{$status}}</p>
                </div>
            </div>
<form method="get">
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


