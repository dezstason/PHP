<?php require_once 'connect.php'; ?>
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
Hello
<hr>


<a href="create.php"><button type="button">Add a book</button></a>

<!-- Афиширование данных из базы, данные получены при вызове connect.php -->

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Nr. Pages</th>
        <th>Author</th>
        <th>Option</th>
    </tr>
    </thead>

    <tbody>
    <?php
        $sql = "SELECT
            Id,
            Name,
            Year,
            Nrpages,
            authors.Author
        FROM
            listofbooks
        JOIN authors ON listofbooks.Idauthor = authors.Idauthor";
        $result = $connect->query($sql);

        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<tr>
                            <td>".$row['Id']."</td>
                            <td>".$row['Name']."</td>
                            <td>".$row['Year']."</td>
                            <td>".$row['Nrpages']."</td>
                            <td>".$row['Author']."</td>
                            <td>
                                <a href='edit.php?Id=".$row['Id']."'><button type='button'>Edit</button></a>
                                <a href='remove.php?Id=".$row['Id']."'><button type='button'>Remove</button></a>
                            </td>
                        </tr>";
        }
        } else {
        echo "<tr><td colspan='5'>No Data Avaliable</td></tr>";
        }
        ?>
    </tbody>
</table>





</body>
</html>