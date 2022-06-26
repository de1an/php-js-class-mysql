<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require "utils.php";
require "connection.php";
require "Clase/QueryBuilder.php";
require "Clase/User.php";