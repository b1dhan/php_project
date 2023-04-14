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
    $query = "delete from infoo where id=" . $_GET['id'];
    if ($conn->query($query) == true) {
        echo "Data deleted";
    } else {
        echo "failed";
    }
}
header('Location: display_data.php');