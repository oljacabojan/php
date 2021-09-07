<?php 
    require "connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = ['password'];

    $sql = "INSERT INTO users VALUES (NULL, '$name', '$email', 'password')";
    $query = mysqli_query($db, $sql);

    header('Location: login.view.php');
?>