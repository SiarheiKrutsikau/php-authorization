<?php
include_once ('in.php');
// выход из сессии

// удаление всех данных и куки (проверить как не удаляя куки будет себя 
    $_SESSION=array();
    session_destroy();
    session_write_close();
    setcookie("uauthoriz", null);
    setcookie("sessionid", null);
    setcookie("checkbox", null);

// переход
$new_url = 'check0.php';
header('Location: '.$new_url);
    exit();
?>


