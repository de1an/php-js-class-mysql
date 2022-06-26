<?php 

require "init.php";

$email = $_POST["email"];

$query = $db->prepare("SELECT * FROM students WHERE email='$email'");
$query->execute();

echo json_encode($query->fetch(PDO::FETCH_OBJ));