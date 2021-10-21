<?php
session_start();
include_once "Game.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST["left"])) {
        left();
    } elseif (isset($_REQUEST["right"])) {
        right();
    } elseif (isset($_REQUEST["win"])) {
        echo "That's Right";
    } elseif (isset($_REQUEST["start"])) {
        start();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h3>Số của bạn là <?php echo $_SESSION['mid'];?></h3>
    <input type="submit" name="start" value="Start">
    <input type="submit" name="right" value="Higher">
    <input type="submit" name="left" value="Lower">
    <input type="submit" name="win" value="Correct">
</form>
</body>
</html>
