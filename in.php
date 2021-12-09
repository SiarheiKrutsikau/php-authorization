<?php
$sessionname = trim($_COOKIE['uauthoriz']);
$sessionid = trim($_COOKIE['sessionid']);
session_start(['name' => $sessionname]);

if ($sessionid != md5(trim(session_id()))) {
    header('Location: check.html');
}
?>

