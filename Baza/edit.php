<?

require_once 'connect.php';

if($_GET['Id']) {
$Id = $_GET['Id'];

$sql = "SELECT
            Name,
            Year,
            Nrpages,
            authors.Author                          
        FROM
            listofbooks
        JOIN authors ON listofbooks.Idauthor = authors.Idauthor 
        WHERE Id = {$Id}";

$result = $connect->query($sql);

$data = $result->fetch_assoc();

$connect->close();

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

<form action="update.php" method="post">
    <table cellspacing="0" cellpadding="0">
        <tr>
            <th>Name</th>
            <td><input type="text" name="Name" placeholder="Name" value="<? echo $data['Name'] ?>" /></td>
        </tr>
        <tr>
            <th>Year</th>
            <td><input type="text" name="Year" placeholder="Year" value="<? echo $data['Year'] ?>" /></td>
        </tr>
        <tr>
            <th>Nr. Pages</th>
            <td><input type="text" name="Nrpages" placeholder="Nrpages" value="<? echo $data['Nrpages'] ?>" /></td>
        </tr>
        <tr>
            <input type="hidden" name="Id" value="<? echo $data['Id']?>" />
            <td><button type="submit">Save Changes</button></td>
            <td><a href="index.php"><button type="button">Back</button></a></td>
        </tr>
    </table>
</form>


</body>
</html>
    <?
        }
?>