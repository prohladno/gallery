<?php 

function writeLogout($login)
{
    $logFile = fopen('log/log.txt', 'a');
    fputs($logFile, 'logout --- ' . $login . ' ' . date('Y-m-d H:i:s') . PHP_EOL);
    fclose($logFile);
}

$login = $_COOKIE['login'];
writeLogout($login);
setcookie('login', '', 0, '/');

header('Location: index.php');
?>