<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "application";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Failed";
} else {
    echo "Success";
    $query = "update infoo set name='" . $_POST['name'] . "',address='" . $_POST['thau'] . "' where id=" . $_POST['id'];
    if ($conn->query($query) == true) {
        echo "Data updated";
    } else {
        echo "failed";
    }
}
header('Location: display_data.php');
