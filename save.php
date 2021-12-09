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
if (!$_POST['password1'] or!$_POST['password2'] or!$_POST['name'] or!$_POST['email'] or!$_POST['login']) {
    echo "<br><a class='red' href='index.html'  >Не верные данные</a>";
    header('Refresh: 5; url=index.html');
    exit();
}
include_once ('bd.php');
if (trim($_POST['password1']) != trim($_POST['password2'])) {
    echo "<br><a class='red' href='index.html'  >Пароли не совпадают, вернитесь к заполнению формы!</a>";
    header('Refresh: 5; url=index.html');
exit();
}
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$login = trim($_POST['login']);
$password = md5(trim($_POST['password1']));
$namemd5 = md5($name);
$team = "SELECT id FROM basen WHERE name=$name";
$autho = mysqli_query($conect, $team);
$id = mysqli_num_rows($autho);
if ($id > 0) {
    echo "<br><a class='red' href='index.html'  >Пользователь с таким именем уже зарегистирован, вернитесь к заполнению формы!</a>";
     header('Refresh: 5; url=index.html');
     exit();
}


$name = trim($_POST['name']);
$email = trim($_POST['email']);
$login = trim($_POST['login']);
$password = md5(trim($_POST['password1']));
$team = "INSERT INTO `basen` (`name`, `email`, `login`, `password`, `namemd5`) VALUES ('$name', '$email', '$login', '$password', '$namemd5');";
mysqli_query($conect, $team);
echo "<br><a class='red' href='check0.php'  >Регистрация прошла успешно!</a>";
header('Refresh: 5; url=check0.php');
exit();
?>

