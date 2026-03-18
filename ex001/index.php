<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info</title>
</head>
<body>
    <h1>My server info</h1>
    <?php 
    phpinfo();
    echo "<pre>" .  var_dump($_SERVER) . "</pre>";
   
    ?>
</body>
</html>