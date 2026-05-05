<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $autor = $_POST["autor"];

    if (empty($autor)) {
        echo "Please fill in all fields.";
        exit;
    }
    try {
        require_once "includes/db.php";
        if ($pdo !== null) {
            $query = "DELETE FROM tb_autor WHERE autor = :autor";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":autor", $autor);
            $stmt->execute();
            header("Location: index.html");
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
