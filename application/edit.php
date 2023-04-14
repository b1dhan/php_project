<html>
<head>

</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333333;
    }

    input, select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #f5f5f5;
        margin-bottom: 15px;
        font-size: 16px;
        color: #333333;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4169E1;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    input[type="submit"]:hover {
        background-color: #0000CD;
    }
</style>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "application";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
} else {
    $query = "SELECT * FROM infoo WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    } else {
        $data = mysqli_fetch_assoc($result);
    }
}
?>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $data['Name'] ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $data['Email'] ?>"><br>
    <label>Phone:</label>
    <input type="tel" name="phone" value="<?php echo $data['Phone'] ?>"><br>
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $data['Address'] ?>"><br>

    <input type="submit">
</form>
</body>
</html>
