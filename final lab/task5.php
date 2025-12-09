<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<h3>Odd Numbers between 10 and 100:</h3>";


for ($i = 10; $i <= 100; $i++) {


    if ($i % 2 != 0) {
        
        echo $i . " ";
    }
}

?>
</body>
</html>