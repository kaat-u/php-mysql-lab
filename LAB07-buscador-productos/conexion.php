<?php 
 
    $host = "localhost"; 
    $db   = "tienda_db"; 
    $user = "root"; 
    $pass = ""; 
 
try { 
     //PDO es un driver que me permite conectar de PHP a MYSQL
    $pdo = new PDO( 
        "mysql:host=$host;dbname=$db;charset=utf8", 
        $user, 
        $pass 
    ); 
 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 
} catch(PDOException $e){ 
 
    die("Error: " . $e->getMessage()); 
 
} 
?>