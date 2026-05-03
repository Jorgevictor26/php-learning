<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/calculatorStyle.css">
    <title>Calculator</title>
</head>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = null;
    $error = null;

    $num01 = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = $_POST['num02'];
    $operation = htmlspecialchars($_POST['operation']);

    if(empty($num01) || empty($num02)) {
        $error = "Please fill in both numbers.";
        exit;
    }

    if (is_numeric($num01) && is_numeric($num02)) {
        switch ($operation) {
            case 'add':
                $result = $num01 + $num02;
                break;
            case 'subtract':
                $result = $num01 - $num02;
                break;
            case 'multiply':
                $result = $num01 * $num02;
                break;
            case 'division':
                if ($num02 != 0) {
                    $result = $num01 / $num02;
                } else {
                    $error = "Division by zero is not allowed.";
                    exit;
                }
                break;
            default:
                $error = "Invalid operation.";
                exit;
        }
    } else {
        $error = "Please enter valid numbers.";
    }
} else {
    $error = "Invalid request method.";
}
?>

<body>
    <div class="calc-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <h2>Calculator</h2>

            <div class="input-group">
                <label for="num01">Number 01</label>
                <input type="text" name="num01" id="num01" placeholder="Enter first number">
            </div>

            <div class="input-group">
                <label for="operation">Operation</label>
                <select name="operation" id="operation">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="division">/</option>
                </select>
            </div>

            <div class="input-group">
                <label for="num02">Number 02</label>
                <input type="text" name="num02" id="num02" placeholder="Enter second number">
            </div>

            <?php if ($result !== null): ?>
                <div class="result-box">
                    Result: <?php echo $result; ?>
                </div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="error-box">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>

</html>