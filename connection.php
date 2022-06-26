<?php 


try {
    $db = new PDO("mysql:host=localhost;dbname=trackerdb", 'root', '');
} catch (PDOException $err) {
    echo $err->getMessage();
}