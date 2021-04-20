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
            <?php
            if (isset($_GET["statusfield"])) {
                $message = "";
                if ($_GET["statusfield"]) {
                    $data = trim($_GET["statusfield"]);
                    $data = stripslashes($_GET["statusfield"]);
                    $data = htmlspecialchars($_GET["statusfield"]);
                    if (strlen($data) == 10) {
                        $message = 'якийсь статус';
                    } else {
                        $message = 'невірний код';
                    }
                } else {
                    $message = 'порожній код';
                }
                echo "<div class='CheckIntro'>
                <div class='CheckIntroText'>
                    <p class='SimpleCheckText'>Статус вашого змовлення: ".$message."</p>
                </div>
            </div>";
            }
            ?>
            <form method="get">
                <div class="DivForm">
                    <input name="statusfield" type="text">
                    <input value="Перевірити" name="submitButton" type="button" onclick="submit()">
                </div>
            </form>
        </div>
    </div>
</section>