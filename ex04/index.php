<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Random Number</title>
</head>

<body>
    <main>
        <?php
        $min = $_GET["min"] ?? 0;
        $max = $_GET["max"] ?? 0;
        $number = $_GET["number"] ?? 0;

        $num = 0;

        if ($min != 0 && $max != 0) {
            $num = mt_rand($min, $max);
        }
        ?>
        <h1>
            Random Number
        </h1>

        <section>
            <form method="get">
                <label for="min">Min</label>
                <input type="number" name="min" id="min" required>
                <label for="max">Max</label>
                <input type="number" name="max" id="max" required>
                <h2>Guess The number</h2>
                <input type="number" name="number" id="number">
                <button> Generate</button>
            </form>
        </section>

        <?php

        echo "<p> Generating the random number between $min and $max </p>";
        echo "<p>Random number is <strong> $num</strong> </p>";

        if ($number == $num) {
            echo "<p>Acertouuuuuuuuuuuu \u{2705}</p>";
        } else {
            echo "<p>Errouuuuuuuuuuuu\u{1F614}</p>";
        }
        ?>

    </main>
    <!--onclick="javascript:document.location.reload()-->
</body>

</html>