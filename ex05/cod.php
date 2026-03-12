<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Currency Converter</h1>
        <?php
        $exchange = 5.22;
        $current = $_GET["money"];
        $converted = $current / $exchange;

        echo "<p> $current in US\$ is $converted </p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>