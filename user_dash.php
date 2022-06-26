<?php 

$title = "Dashboard";

require "init.php";

if (!isset($_SESSION["id"])) {
    $user->redirect();
}

$students = $qb->getStudents();
$payments = $qb->getPayments();
$totalAmount = $qb->getTotalAmount();









require "views/user_dash.view.php";