<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php


 $amount = 250.00;
 $vat_rate = 0.15; 


 $vat_amount = $amount * $vat_rate;


 $total_amount = $amount + $vat_amount;


echo "<h3>VAT Calculation</h3>";
echo "Original Amount: $" . number_format($amount, 2) . "<br>";
echo "VAT Rate: " . ($vat_rate * 100) . "%<br>";
echo "VAT Amount: $" . number_format($vat_amount, 2) . "<br>";
echo "Total Amount (including VAT): $" . number_format($total_amount, 2);

?>
</body>
</html>