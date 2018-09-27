<?php require_once 'connect.php';

$authors = mysqli_query($connect, 'SELECT Author, Idauthor FROM authors')
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

<form action="create.php" method="post">
    <table cellspacing="0" cellpadding="0">
        <tr>
            <th>Name of book</th>
            <td><input type="text" name="Name" placeholder="Name" /></td>
        </tr>
        <tr>
            <th>Year it was published</th>
            <td><input type="text" name="Year" placeholder="Year" /></td>
        </tr>
        <tr>
            <th>Nr. of pages</th>
            <td><input type="text" name="Nrpages" placeholder="Nr. Pages" /></td>
        </tr>

        <!-- Добавление авторов в выпадающий список -->

        <tr>
            <th>Author</th>
            <td><select name="Idauthor">
                    <option value="0">Select author</option>
                    <? foreach ($authors as $author) {?>
                        <option value="<?=$author['Idauthor'];?>"><?=$author['Author']?></option>
                    <?}?>
                </select>
            </td>

        </tr>
        <tr>
            <td><button type="submit">Add Book</button></td>
            <td><a href="index.php"><button type="button">Back</button></a></td>
        </tr>
    </table>
</form>

<?php

// Добавление данных в базу

if($_POST) {
    $name = $_POST['Name'];
    $year = $_POST['Year'];
    $nrpages = $_POST['Nrpages'];
    $author = $_POST['Idauthor'];

    $sql = "INSERT INTO listofbooks (Name, Year, Nrpages, Idauthor) VALUES ('$name', '$year', '$nrpages', '$author')";
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