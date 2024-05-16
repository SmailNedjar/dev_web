<?php

try {
    $db= new PDO("mysql:host=localhost;dbname=bdshop;charset=utf8mb4","root","", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }