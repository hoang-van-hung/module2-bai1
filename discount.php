<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="discount.php" method="post">
    <label for="description">Product Description: </label>
    <input type="text" name="description" id="description"> <br>
    <label for="price">List Price :</label>
    <input type="number" name="price" id="price"> <br>
    <label for="discount">Discount Percent % :</label>
    <input type="number" name="discount" id="discount"> <br>
    <button>Calculate Discount</button>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $calculator =$price *$discount *0.01;
    $acount=$price-$calculator;

    echo "Number of discount: ".$calculator."<br>";
    echo "After discount: ".$price."-".$calculator."=".$acount;
}
