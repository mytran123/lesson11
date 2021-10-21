<?php
session_start();
include_once "Game.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')

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
    <h1>Số của bạn là <?php echo $_SESSION["mid"]?></h1>
    <input type="submit" name="start" value="Start">
    <input type="submit" name="higher" value="Higher">
    <input type="submit" name="lower" value="Lower">
    <input type="submit" name="win" value="Win">
</form>
</body>
</html>
