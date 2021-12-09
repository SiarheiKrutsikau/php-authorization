<?php
include_once ('in.php');
include_once ('bd.php');

$team = "SELECT * FROM basen WHERE namemd5 = '$sessionname'";

$autho = mysqli_query($conect, $team);
$data = mysqli_fetch_array($autho);

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
           <div class="i3" >
               <?php
               $name = $data['name'];
               echo "<div class='i4'>$name <br>Добро пожаловать в личный кабинет!</div>";
               ?>
               <br>
               <div class="i3">
                   <a class='i4' href='formfio.php'  >Изменить данные <br>(фамилию, имя, отчество)</a>
               </div>
               <div class="i3">
                   <a class='i4' href='formpassword.php'  >Изменить пароль</a>
               </div>
               <div class="i3">
                   <a class='i4' href='index.html'  >Регистрация дополнительно логина и пароля</a>
               </div>
               <div class="i3">
                   <a class='i4' href='out.php'  >Завершить сеанс работы</a>
               </div>

           </div>
       </div>
    </body>
</html>