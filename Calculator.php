<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Calculator</legend>
    <form action="#" method="post">
        <label for="first_number">First Number</label>
        <input type="number" name="first_number" id="first_number"> <br>
        <label for="operator">Operator</label>
        <select name="operator" id="operator">
            <option value="sum">sum</option>
            <option value="minus">minus</option>
            <option value="multi">multi</option>
            <option value="division">division</option>
        </select> <br>
        <label for="second_number">Second Number</label>
        <input type="number" name="second_number" id="second_number">
        <button name="Calculator">Calculate</button>
    </form>
</fieldset>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST["first_number"];
    $second = $_POST["second_number"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "sum":
            sum($first, $second);
            break;
        case "minus":
            minus($first, $second);
            break;
        case "multi":
            multi($first, $second);
            break;
        case "division":
            division($first, $second);
            break;
    }

}
function sum($a, $b)
{
    echo $result = $a + $b;
}
function minus($a, $b)
{
    echo $result = $a - $b;
}
function multi($a, $b)
{
    echo $result = $a * $b;
}
function division($a, $b)
{
    echo $result = $a / $b;
}

?>
</body>
</html>
<script></script>


