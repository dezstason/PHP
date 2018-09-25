
<?php

require_once 'connect.php';


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
hello
<?

if($_POST) {
    $Id = $_POST['Id'];
    echo ($_POST['Id']);
    $sql = "DELETE
            FROM listofbooks
            WHERE Id = {$Id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='create.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}


?>
</body>
</html>
