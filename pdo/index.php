<?php 

require 'connection.php';
require 'Student.php';


$sql = "SELECT * FROM users";
$query = $db->query($sql);
$result = $query->fetchAll(PDO::FETCH_CLASS, 'Student');


require 'views/index.php';
