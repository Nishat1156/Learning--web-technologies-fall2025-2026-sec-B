<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>123</p>
    <?php


 $length = 10;
 $width = 5;


 $area = $length * $width;


 $perimeter = 2 * ($length + $width);


echo "<h3>Rectangle Calculations</h3>";
echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br><br>";

echo "The Area of the rectangle is: " . $area . "<br>";
echo "The Perimeter of the rectangle is: " . $perimeter;

?>
</body>
</html>

