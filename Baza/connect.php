<?

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "books";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    echo "Successfully Connected";
}
$result = mysqli_query($connect, 'SELECT
                                        Name,
                                        Year,
                                        Nrpages,
                                        authors.Author
                                        
                                    FROM
                                        listofbooks
                                        JOIN authors ON listofbooks.Idauthor = authors.Idauthor');
?>