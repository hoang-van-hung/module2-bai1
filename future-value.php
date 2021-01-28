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
    <h2>Future Value</h2>
    <label for="">Amount</label>
    <input type="number" id="amount" name="amount"> <br>
    <label for="rate">Rate</label>
    <input type="number" id="rate" name="rate"> <br>
    <label for="year">Number of year</label>
    <input type="number" id="year" name="year"> <br>
    <button type="submit">Calculator</button>

</form>
</body>
</html>
<?php
/*class ValueFuture{
    private $amount;
    private $rate;
    private $year;

    public function __construct($amount,$rate,$year)
    {
        $this->amount= $amount;
        $this->rate= $rate;
        $this->year =$year;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getYear()
    {
        return $this->year;
    }

    function calculate(){
        $future =$this->getAmount()+( $this->getAmount()*$this->getRate());
    }
} */

if ($_SERVER["REQUEST_METHOD"]== 'POST'){
    $amount =$_POST["amount"];
    $rate =$_POST["rate"];
    $year =$_POST["year"];

    if ($amount != 0){
        $value= $amount+ $amount*$rate/100;
        //$total =$value*$year;
        echo "Future Value : <br>".$amount. " +".$value.".".$rate."% =".$value;
    }
}