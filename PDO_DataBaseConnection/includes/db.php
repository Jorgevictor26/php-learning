<?php

$dbname = "biblioteca";
$dbuser = "root";
$dbpassword = "P@ssword2026";
$dsn = "mysql:host=localhost;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed " . $e->getMessage();
}
