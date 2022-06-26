<?php 

require "init.php";

$title = "Tracker App";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = false;
    if (isset($_POST["email"]) and !empty($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $error_email = "Wrong email or invalid email";
        $errors = true;
    }
    if (isset($_POST["password"]) and !empty($_POST["password"])) {
        $password = $_POST["password"];
    } else {
        $error_password = "Wrong password or invalid password";
        $errors = true;
    }
    if (!$errors) {
        $user->login($email, $password);
    }
}


require "views/index.view.php";