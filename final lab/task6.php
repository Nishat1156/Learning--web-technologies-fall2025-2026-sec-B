<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 $fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");


 $search = "Mango";


 $found = false;


foreach ($fruits as $fruit) {
   
    if ($fruit == $search) {
       
        $found = true;
        break; 
    }
}

if ($found) {
    echo "Yes, we found '" . $search . "' in the array.";
} else {
    echo "Sorry, '" . $search . "' was not found in the array.";
}

?>
</body>
</html>