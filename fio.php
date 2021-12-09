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

$newname = trim($_POST['newname']);

//$team = "UPDATE `basen` SET `name` = '$newname', `namemd5`= '$newnamemd5' WHERE `basen`.`namemd5` = '$sessionname'";
$team = "UPDATE `basen` SET `name` = '$newname' WHERE `basen`.`namemd5` = '$sessionname'";
$auto = mysqli_query($conect, $team);

echo "<br><a class='red' href='cabinet.php'  >Изменения данных прошли успешно!</a>";
header('Refresh: 5; url=cabinet.php');
exit();
?>

