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
    $query = "insert into infoo(Name,Email,Phone,Address,Position) values('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['address'] . "','" . $_POST['position'] . "')";
    if ($conn->query($query) == true) {
        echo "Data inserted";
    } else {
        echo "failed";
    }

}
header('Location: filled.php');
