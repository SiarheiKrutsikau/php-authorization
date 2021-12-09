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
$logincheck = trim($_POST['logincheck']);
$passwordcheckmd5 = md5(trim($_POST['passwordcheck']));


include_once ('bd.php');
$team = "SELECT password FROM basen WHERE login=$logincheck";
$autho = mysqli_query($conect, $team);
$passwordbase = mysqli_fetch_array($autho);

if ($passwordbase['password'] != $passwordcheckmd5) {
    echo "<br><a class='red' href='check0.php'  >Неправильный логин или пароль</a>";
    header('Refresh: 5; url=check0.php');
    exit();
}
//session_start(['name' => '$logincheckmd5']);

$logincheckmd5 = md5($logincheck);
session_name($logincheckmd5);
session_start();
$sid = md5(trim(session_id()));
setcookie("uauthoriz", session_name(), time() + 605000);
setcookie("sessionid", $sid, time() + 605000);
if ($_POST['checkbox'] and!$_COOKIE['checkbox']) {
    setcookie("checkbox", 'on', time() + 605000);
    }
header('Location: cabinet.php ');
?>

