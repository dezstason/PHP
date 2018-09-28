<?
$array = array(
    " " => "Main Page",
    "list" => "Add Book",
    "list2" => "List of Books",
    "list3" => "404 ERROR"
)
?>
<html>
<head>
    <title><? echo $array{$_GET['page']}; ?></title>
</head>
<body>


    <div>
        <a href="index.php?page=list">Add Book</a>
        <a href="index.php?page=list2">List of Books</a>
        <a href="index.php?page=list3">Unknown Page</a>

    </div>
    <div>
        <? if(!empty($_GET['page'])){
            if(file_exists("{$_GET['page']}.php"))
                include "{$_GET['page']}.php";
            else
                include '404.php';
        }else{
            echo 'Select page';
        }
        ?>
    </div>


</body>
</html>