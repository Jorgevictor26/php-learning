<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Result</h1>
    </header>
    <main>
        <?php

        $name = $_GET["name"];
        $surname = $_GET["surname"];

        echo "<p>Seja Bem-Vindo <strong> $name $surname </strong> </p>";
        ?>
    </main>
</body>

</html>