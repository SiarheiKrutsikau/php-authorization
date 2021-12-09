<?php
include_once ('in.php');
?>
<html>
    <head>
        <style>
            @import url("mein.css");
        </style>

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="i4">
            <form class="i3" action="fio.php" method="POST" enctype="multipart/form-data" >
                <div class="i4">Введите новые данные</div>


                <div class="buttonmini">Фамилия, Имя, Отчество:<br>
                    <input class="i3" type="text"  required size='50' maxlength='45' name="newname" title="Разрешено русские буквы, цифры и нижнее подчеркивание" pattern="(^\А-Я+$)"></br>
                </div><br>
                <input class="i3" type="submit"></br>
                <a class="reg" href='cabinet.php' >Вернуться в кабинет пользователя</a>

        </div>


    </body>
</html>
