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

if ($mysql->connect_error) {
    echo "Error Number:" . $mysql->connect_errno . "<br>";
    echo "Error: " . $mysql->connect_error . "<br>" ;
} else {
    // echo "Host Info:" . $mysql->host_info ;

    //$mysql->query("DROP TABLE `test`");

/*    $mysql->query("CREATE TABLE `test`(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL ,
    bio TEXT NOT NULL
)");*/


}

$mysql->close();
?>


</body>
</html>

