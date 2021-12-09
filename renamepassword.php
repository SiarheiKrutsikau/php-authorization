<html>
    <head>
        <style>
            @import url("mein.css");
        </style>
        <meta charset="utf-8">
        <title>Документ без названия</title>
    </head>
    <body>
    </body>
</html>
<?php
include_once ('in.php');
include_once ('bd.php');
$newpassword1 = trim($_POST['newpassword1']);
$newpassword2 = trim($_POST['newpassword2']);
if ($newpassword1 != $newpassword2) {
    echo "<br><a class='red' href='formpassword.php'  >Пароли не совпадают, вернитесь к заполнению формы!</a>";
    header('Refresh: 5; formpassword.php');
    exit();
}

$team = "SELECT password FROM basen WHERE namemd5='$sessionname'";
$autho = mysqli_query($conect, $team);
$password = mysqli_fetch_array($autho);
$basepassword=trim($password['password']);
$oldpaword = md5(trim($_POST['oldpassword']));
if ($basepassword != $oldpaword) {
    echo "<br><a class='red' href='formpassword.php'  >Вы указали не верный старый пароль!</a>";
    header('Refresh: 5; formpassword.php');
    exit();
}
$newpassword = md5($newpassword1);
$team = "UPDATE `basen` SET `password` = '$newpassword' WHERE `basen`.`namemd5` = '$sessionname'";
$auto = mysqli_query($conect, $team);

echo "<br><a class='red' href='cabinet.php'  >Изменение пароля прошло успешно!</a>";
header('Refresh: 5; cabinet.php');
exit();
?>

