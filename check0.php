<?php
echo $_COOKIE['checkbox'];
if ($_COOKIE['checkbox'] == 'on') {
    $chk = "checked";
    include_once ('in.php');
    $new_url = 'cabinet.php';
    header('Location: ' . $new_url);
    exit();
} else {
    $chk = false;
    
}
echo '11' . $chk;
?>
<html>
    <head>
        <style>
            @import url("mein.css");
        </style>
        <meta charset="utf-8">
        <title>Документ без названия</title>
    </head>


    <body>


        <div class="i4">
            <form class="i3" action="check.php" method="POST" enctype="multipart/form-data" >
                <div class="i4">
                    Авторизация пользователя</div>
                <div class="buttonmini"> Логин <br>
                    <input class="i3" type="text"  required size='25' maxlength='20' name="logincheck" title="Разрешено английские буквы, цифры и нижнее подчеркивание" pattern="(^\w+$)">

                </div>
                </br>
                <div class="buttonmini"> Пароль <br>
                    <input class="i3" type="password"  required  size='25' maxlength='20' title="Разрешено английские буквы, цифры и нижнее подчеркивание"  name="passwordcheck"  pattern="(^\w+$)">

                </div> </br><input class="i3" type="submit"></br>
                <input class="i3" type="checkbox" name="checkbox" <?php echo "$chk"; ?> >запомнить меня<br>
                <a  class="reg" href='index.html' >Регистрация пользователя</a>
        </div>



    </div>
</body>
</html>
