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

<?

$fileName = 'package.json';
$fileData = file_get_contents($fileName);
$books = json_decode($fileData, true);
?>
<table border="1">
    <thead>
    <tr>
        <th>Title</th>
        <th>Year</th>
        <th>ID</th>
        <th>Nr. Pages</th>
        <th>Author</th>
    </tr>
    </thead>
    <tbody>
    <?
    foreach ($books as $book) {?>
        <tr>
            <td><?=$book['title'];?></td>
            <td><?=$book['year'];?></td>
            <td><?=$book['id'];?></td>
            <td><?=$book['nr_page'];?></td>
            <td><?=$book['author'];?></td>
        </tr>
    <?}
    ?>

</body>
</html>