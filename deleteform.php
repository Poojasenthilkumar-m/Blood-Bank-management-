<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Page</title>
    <style>
        body {
            background-image: url('data:image/jpeg;base64,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'); /* Ensure you have a background.jpg in the same directory */
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            padding: 10px 20px;
            background: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Delete</h1>
        <form action="delete-student.php" method="post">
            <input type="text" name="name" placeholder="name" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
