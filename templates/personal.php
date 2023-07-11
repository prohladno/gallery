<h1 class="text-center">Hello, <?= $_COOKIE['login'] ?></h1>

<button class="btn btn-primary "><a class="text-light" href="logout.php">Log out</a></button>
<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit" value="send">
</form>


<?php 
foreach (scandir(__DIR__ . '\..\uploads') as $link) {
    if ($link === '.' || $link === '..') continue;    
?>
    <img src="/uploads/<?= $link ?>" width="80px"></img>
<?php } ?> 