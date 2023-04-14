<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            color: #1a1a1a;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4169E1;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #1a1a1a;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
    <title>List of Applicants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><b>EnLighten</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registerandlogin/login.php"><b>Login</b></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<h2 style="text-align: center;"> List of Applicants</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Position</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Action</th>
    </tr>

    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "application";

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        echo "Failed";
    } else {
        $query = "select * from infoo";
        $result = mysqli_query($conn, $query);
        while ($each = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $each['Name'] . "</td>
            <td>" . $each['Email'] . "</td>
            <td>" . $each['Phone'] . "</td>
            <td>" . $each['Address'] . "</td>
            <td>" . $each['Position'] . "</td> 
            <td>" . $each['Status'] . "</td>
            <td><a href='delete.php?id=" . $each['id'] . "'><b>Delete</b></a></td>  
            <td>
                <a href='send-mail.php?id=" . $each['id'] . "'>
                    <button style='background-color:#4CAF50; color:white'>Accept</button>
                </a>
                <a href='send-mailno.php?id=" . $each['id'] . "'>
                    <button style='background-color:#f44336; color:white'>Reject</button>
                </a>
            </td>
          </tr>";
        }
    }

    ?>

