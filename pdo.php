<?php
    $pdo = new PDO('mysql:host=127.0.0.1; port=localhost:3307; dbname=BloodBank','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>