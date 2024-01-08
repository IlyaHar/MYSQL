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


function printResult($result)
{
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id'] . ' ';
        echo 'NAME: ' . $row['name'] . ' ';
        echo 'BIO: ' . $row['bio'] . "<br><br>";
    }
}

echo '<hr>';

}

$mysql = new mysqli('localhost', 'root', '', 'php-mysql');
$mysql->query("SET NAMES 'utf8'");

// $mysql->query("INSERT INTO `test` (`name`, `bio`) VALUES ('John', 'Hello')");
$result = $mysql->query('SELECT * FROM `test`');
printResult($result);

$result = $mysql->query('SELECT `id`, `name` FROM `test`');
printResult($result);

$result = $mysql->query("SELECT * FROM `test` WHERE `id` = 5");
printResult($result);

$result = $mysql->query("SELECT * FROM `test` WHERE `name` = 'John' ORDER BY `id` DESC ");
printResult($result);

$result = $mysql->query("SELECT * FROM `test` LIMIT 2, 1");
printResult($result);
// print_r($result);
// echo 'Nums: ' . $result->num_rows;

// $mysql->query("DELETE FROM `test`");
/*for ($i = 1; $i <= 5; $i++) {
    $name = 'Ilya' . $i;
    $bio = 'Full Text' . $i;
    $mysql->query("INSERT INTO `test` (`name`, `bio`) VALUES ('$name', '$bio')");
}*/


/*if ($result->num_rows == 0) {
    echo 'В базе данных пусто :(';
} else {
    print_r($result->fetch_all());
}*/



//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        echo 'ID: ' . $row['id'] . ' ';
//        echo 'NAME: ' . $row['name']  . ' ';
//        echo 'BIO: ' . $row['bio'] . "<br><br>";
//    }

/*    foreach ($result as $row) {
        echo "<p><i>ID:</i> <b>$row[id]</b></p>";
        echo "<p><i>NAME:</i> <b>$row[name]</b></p>";
        echo "<p><i>BIO:</i> <b>$row[bio]</p></b> <hr>";
    }*/
//}



$mysql->close();
?>


</body>
</html>

