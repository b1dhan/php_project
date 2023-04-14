<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4169E1FF;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0000CD;
        }

        h1 {
            text-align: center;
            margin-top: 0;
            color: #1a1a1a;
        }
    </style>
</head>
<body>

<form method="post" action="insert_user.php" enctype="multipart/form-data">
    <h1> Register </h1>
    <label for="person-name">Name:</label>
    <input type="text" name="name" id="person-name"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit">
</form>
</body>
</html>
