<?php require_once 'connect.php';

if($_POST) {
    $Name = $_POST['Name'];
    $Year = $_POST['Year'];
    $Nrpages = $_POST['Nrpages'];
    //$contact = $_POST['contact'];

    $Id = $_POST['Id'];

    $sql = "UPDATE listofbooks 
            SET Name = '$Name', Year = '$Year', Nrpages = '$Nrpages' 
            WHERE Id = {$Id}";

    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='edit.php?id=".$Id."'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>