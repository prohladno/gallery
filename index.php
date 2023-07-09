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
        <a href="logout.php">Log out</a>
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