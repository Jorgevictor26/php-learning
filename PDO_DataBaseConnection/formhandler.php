<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $bio = $_POST['bio'];
    $autor = $_POST['autor'];

    if (empty($bio) || empty($autor)) {
        echo "Please fill in all fields.";
        exit;
    }
    try {
        require_once "includes/db.php";

        $query = "INSERT INTO tb_autor(biografia, autor) VALUES(:biografia, :autor);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":biografia", $bio);
        $stmt->bindParam(":autor", $autor);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("location: index.html");
        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("location: index.html");
}
