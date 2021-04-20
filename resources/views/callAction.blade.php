<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Виклик майстра</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="../resources/css/styles.css" rel="stylesheet">
    <link href="../resources/css/bootstrap-grid.css" rel="stylesheet">
</head>
<body style="min-height: 450px">
<?php require('formaccepted.php'); ?>
<div class="Form" style="min-height: 450px">
    <div class="container">
        <div class="form" style="display: flex; min-height: 450px; align-items: center; justify-content: center;">
            <div style="height: auto">
                <a href='http://localhost/project/public/#forma' style='text-decoration: none'>
                    <p class='BoldText' style='margin: 0; color: #000000; font-size: 20px'>
                        @if(count(session('message'))!=0)
                            @foreach(session('message') as $a)
                                <br>
                                {{$a}}
                            @endforeach
                        @else
                            Для виклику майстра необхідно заповнити хоча б номер телефону!
                        @endif

                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
