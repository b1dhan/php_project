<!DOCTYPE html>
<html lang="en">
<head>
    <title>EnLighten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            font-size: 24px;
            font-weight: normal;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            color: #333;
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            padding: 12px;
            width: 100%;
        }

        select option:first-child {
            display: none;
        }

        input[type="submit"] {
            background-color: #4169E1;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            padding: 12px 20px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0000CD;
        }
    </style>
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

<form method="post" action="insert.php"
      style="background-color: #ffffff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); margin: 20px auto; max-width: 600px; padding: 20px; width: 90%;">
    <h2 style="text-align:center;"><b>Teacher Job Application Form</b></h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required
           style="width: 100%; box-sizing: border-box; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required
           style="width: 100%; box-sizing: border-box; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone"
           style="width: 100%; box-sizing: border-box; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="address">Address:</label>
    <input type="text" id="address" name="address"
           style="width: 100%; box-sizing: border-box; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="position">Position:</label>
    <select id="position" name="position" required
            style="width: 100%; box-sizing: border-box; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
        <option value="">--Select--</option>
        <option value="Science">Science Teacher</option>
        <option value="English">English Teacher</option>
        <option value="Mathematics">Mathematics Teacher</option>
        <option value="Computer">Computer Teacher</option>
    </select>

    <input type="submit" value="Submit Application"
           style="background-color: #4169E1; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">
</form>
</body>
</html>

