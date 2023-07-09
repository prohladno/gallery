<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (!empty($_COOKIE['login'])) : ?>
        <p>Hello <?= $_COOKIE['login'] ?></p>
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="attachment">
            <input type="submit" value="send">
        </form>
        <a href="logout.php">Log out</a>
        <br>
        <?php foreach (scandir(__DIR__ . '/uploads') as $link){ 
            if($link === '.' || $link === '..') continue;?>
                <img src="/uploads/<?= $link ?>" width="80px"></img>
        <?php } ?>
    <?php else : ?>
        <form action="login.php" method="post">
            <label for="login">Login</label>
            <input name="login" type="text" placeholder="Your login">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Your password">

            <input type="submit" value="Log in">
        </form>
    <?php endif; ?>


</body>

</html>