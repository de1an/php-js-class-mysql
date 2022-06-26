<?php 

require "init.php";

$payments = $qb->getPayments();
echo json_encode($payments);