<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=facturation;charset=utf8", "root", "");
    }catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

    