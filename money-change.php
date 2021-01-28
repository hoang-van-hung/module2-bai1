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
<form method="post">
    <label for="amount">Amount</label>
    <input type="number" name="amount" id="amount"> <br>
    <label for="loai1">From</label>
    <select name="loai1" id="loai1">
        <option value="23000">VND</option>
        <option value="6">NDT</option>
        <option value="1">USD</option>
    </select>
    <br>
    <label for="loai2">To</label>
    <select name="loai2" id="loai1">
        <option value="23000">VND</option>
        <option value="6">NDT</option>
        <option value="1">USD</option>
    </select> <br>
    <button type="submit">Change</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $amount=$_POST["amount"];
    $loai1 =$_POST["loai1"];
    $loai2 =$_POST["loai2"];

    $loai1 =$amount*$loai2;
    echo "Number : ".$loai1;
}
