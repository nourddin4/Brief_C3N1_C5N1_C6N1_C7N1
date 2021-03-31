<?php
    session_start();

    $firstname = "";
    $lastname = "";
    $email = "";
    $errors = array();

    // connect to db
    $db = mysqli_connect('localhost', 'root', '', 'registration');


    if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password_1 = $_POST['passowrd_1'];
        $password_2 = $_POST['passowrd_2'];

    // ensure that form fields are filled properly
    if (empty($firstname)) {
        array_push($errors, "First name is required");
    }

    if (empty($lastname)) {
        array_push($errors, "Last name is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "Passwords are not matched");
    }

    // if there is no errors save user info to db
    if (count($errors) == 0) {
        $password = $password_1;
        $sql = "INSERT INTO users (Firstname, Lastname, Email, Password) VALUES ('$firstname', '$lastname', '$email', ' $password')";
        mysqli_query($db, $sql);

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are registred now";
        header('location: index.php');
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['passowrd'];

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE email='$email' AND passowrd='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['seccess'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "wrong username or password");
            header('location: login.php');
        }
    
    }
}
?>