<?php
$host="localhost";
$user = "b12";
$password="12345";
$database = "basename";
ini_set('display_errors', 0);
$conect=mysqli_connect($host, $user, $password, $database); //подключаемся к серверу

if(!$conect)
{
echo "<div style='color:red'>Не возможно соединиться с базой данных. Подключите базу ...  </div>" ; 

}
else
 {
    
    ini_set('display_errors', 1);
}

?>