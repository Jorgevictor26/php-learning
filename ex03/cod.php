<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>

<body>
    <h1>Final Result</h1>
    <main>
        <?php
        $number = $_GET["number"];
        echo "<p> O número escolhido foi <strong> $number </strong> </p>";
        echo "<p> O seu antecessor é " . ($number - 1). "</p>" ;
        echo "<p> O seu sucessor é " . ($number + 1). "</p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>