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
        <h2>Home page</h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['firstname'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
            <p><a href="" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
    
</body>
</html>