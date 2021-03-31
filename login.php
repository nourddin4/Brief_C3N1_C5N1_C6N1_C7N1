<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>reg-sys</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>

       <div class="input-group">
            <label>Passowrd</label>
            <input type="password" name="passowrd_1">
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>

        <p>
            Not a member? <a href="Register.php">Register Here</a>
        </p>
    </form>
    
</body>
</html>