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
    error_reporting(E_ALL);
    $fileName = 'package.json';
    if(!empty($_POST['title']) && !empty($_POST['year'])){
        $fileData = file_get_contents($fileName);
        $books = json_decode($fileData, true);
        $newElement = [
            "title" => trim($_POST['title']),
            "year" => trim($_POST['year']),
            "id" => trim($_POST['id']),
            "nr_page" => trim($_POST['nr_page']),
            "author" => trim($_POST['author'])
        ];
        $books[] = $newElement;
        file_put_contents($fileName, json_encode($books));
    }
    ?>

    <form method="post">
        Title <input type="text" name="title"><br>
        Year <input type="text" name="year"><br>
        ID <input type="text" name="id"><br>
        Nr. Page <input type="text" name="nr_page"><br>
        Author <input type="text" name="author"><br>
        <input type="submit" value="Add"><br>
    </form>
</body>
</html>