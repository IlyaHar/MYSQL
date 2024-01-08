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

<?php

$mysql = new mysqli('localhost', 'root', '', 'php-mysql');
$mysql->query("SET NAMES 'utf8'");

// $mysql->query("INSERT INTO `test` (`name`, `bio`) VALUES ('Ilya', 'Full Text')");

/*for ($i = 1; $i <= 5; $i++) {
    $name = 'Bob ' . $i;
    $mysql->query("INSERT INTO `test` (`name`, `bio`) VALUES ('$name', 'Full Text')");
}*/

// $mysql->query("UPDATE `test` SET `bio` = 'Hello World'");

// $mysql->query("UPDATE `test` SET `name` = 'User' WHERE `id` = 7");

// $mysql->query("UPDATE `test` SET `bio` = 'New Text' WHERE `id` <= 3");

// $mysql->query("UPDATE `test` SET `bio` = 'YES' WHERE `name` = 'Bob 4'");

// $mysql->query("DELETE FROM `test` WHERE `id` = 2");

// $mysql->query("DELETE FROM `test` WHERE `id` > 3");

// $mysql->query("DELETE FROM `test` WHERE  `id` = 8 OR `id` = 9");

// $mysql->query("DELETE FROM `test` WHERE  `id` = 3 AND `name` = 'Bob 1'");




$mysql->close();
?>


</body>
</html>

