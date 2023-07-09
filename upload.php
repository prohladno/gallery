<?php

if(pathinfo(__DIR__ . '/uploads/' . $_FILES['attachment']['name'], PATHINFO_EXTENSION) === 'gif'){

    if(file_exists(__DIR__ . '/uploads/' . $_FILES['attachment']['name'])){
        echo 'File already exist';
    } else {
        if(move_uploaded_file($_FILES['attachment']['tmp_name'], __DIR__ . '/uploads/' . $_FILES['attachment']['name'])){
            header('Location: index.php');
        }else {
            echo 'Error';
        }
    }

} else {
    echo 'You can upload only gif file';
}


