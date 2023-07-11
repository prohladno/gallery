<?php 

require 'templates/header.php';

if (!empty($_COOKIE['login'])){ 
    require 'templates/personal.php';
} else { 
    require 'templates/form.php';
} 

require 'templates/footer.php';