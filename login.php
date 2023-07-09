<?php
$db = require 'data/db.php';

$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';

if (array_key_exists($login, $db)) {
    if($db[$login]['password'] == $password){
        setcookie('login', $_POST['login'], 0, '/');
        header("Location: index.php");
    } else {
        echo 'Wrong password';
        
    }
} else {
    echo 'User is not found';
    
}



?>