<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4169E1;
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

        .signup-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #1a1a1a;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }


    </style>
</head>
<body>

<form method="post" action="check_login.php" enctype="multipart/form-data">
    <h1>Login</h1>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <a class="signup-link" href="register.php">Sign up</a>
    <input type="submit">
</form>
</body>
</html>