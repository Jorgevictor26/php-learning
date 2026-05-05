<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $bio = $_POST['bio'];
    $autor = $_POST['autor'];

    if (empty($autor)) {
        echo "Please fill in all fields.";
        exit;
    }
    try {
        require_once "includes/db.php";

        $query = "UPDATE tb_autor SET autor = :autor WHERE id = 4";

        if ($pdo !== null) {
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":autor", $autor);
            $stmt->execute();
        }


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
