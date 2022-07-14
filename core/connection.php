<?php
try {
    $user = "root";
    $pass = "";
    $pdo = new PDO('mysql:host=localhost;dbname=cyim;charset=utf8',$user,$pass);
    
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
