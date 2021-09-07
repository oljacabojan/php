<?php 

require 'connection.php';

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users VALUES (NULL, :name, :age)";
$query = $db->prepare($sql);
$query->execute(["name"=>$name, "age"=>$age]);

$row_count = $query->rowCount();

if ($row_count ==1) {
    header("Location: index.php");
} else {
    header("Location: 404.php");
}


