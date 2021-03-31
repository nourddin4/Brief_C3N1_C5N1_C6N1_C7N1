<?php include('server.php'); ?>
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
        <h2>Register</h2>
    </div>

    <form method="post" action="Register.php">
        <!--display errors here-->
        <?php include('errors.php') ?>

        <div class="input-group">
            <label>FirstName</label>
            <input type="text" name="firstname">
        </div>

        <div class="input-group">
            <label>Lastname</label>
            <input type="text" name="lastname">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>

        <div class="input-group">
            <label>Passowrd</label>
            <input type="password" name="passowrd_1">
        </div>

        <div class="input-group">
            <label>Confirm Passowrd</label>
            <input type="password" name="passowrd_2">
        </div>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>

        <p>
            Already a memeber? <a href="login.php">Sign in</a>
        </p>
    </form>
    <?php



    ?>
</body>
</html>