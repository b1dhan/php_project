<?php
$host = 'localhost';
$username = "root";
$password = "";
$database = "application";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Failed";
} else {
    echo "";
    if (!$conn) {
        echo "Failed";
    } else {
        $query = "select * from users where email='" . $_POST['email'] . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $data['password'])) {
                header("Location: ../display_data.php");
            } else {
                echo 'Password incorrect';
            }
        } else {
            echo 'User not found';
        }
    }
}
