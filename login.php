<?php
$db = require 'data/db.php';

$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';

if (array_key_exists($login, $db)) {
    if($db[$login]['password'] == $password){
        setcookie('login', $_POST['login'], 0, '/');
        writeLogin($login);
        header("Location: index.php");
    } else {
        echo 'Wrong password';
        
    }
} else {
    echo 'User is not found';
    
}


function writeLogin($login)
{
    $logFile = fopen('log/log.txt', 'a');
    fputs($logFile, 'login --- ' . $login . ' ' . date('Y-m-d H:i:s') . PHP_EOL);
    fclose($logFile);
}



?>