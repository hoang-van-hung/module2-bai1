<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login form</title>
</head>
<body>
<form method="post">
    <input type="number" name="height" placeholder="Input your height">
    <button type="submit" name="read">Read</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $height = $_POST["height"];

    if ($height <1000){
        switch (floor($height/100)){
            case 0:echo "";break;
            case 1:echo "One hundred and ";break;
            case 2:echo "Two hundred and ";break;
            case 3:echo "Three hundred and ";break;
            case 4:echo "Four hundred and ";break;
            case 5:echo "Five hundred and ";break;
            case 6:echo "Six hundred and ";break;
            case 7:echo "Seven hundred and ";break;
            case 8:echo "Eight hundred and ";break;
            case 9:echo "Nine hundred and ";break;
        }
        $number=$height%100;
        if ($number >= 0) {
            switch ($number) {
                case 0:
                    echo "Zero";
                    break;
                case 1:
                    echo "One";
                    break;
                case 2:
                    echo "Two";
                    break;
                case 3:
                    echo "Three";
                    break;
                case 4:
                    echo "Four";
                    break;
                case 5:
                    echo "Five";
                    break;
                case 6:
                    echo "Six";
                    break;
                case 7:
                    echo "Seven";
                    break;
                case 8:
                    echo "Eight";
                    break;
                case 9:
                    echo "Nine";
                    break;
            }

        }
        if ($number >= 10 && $number < 20) {
            switch ($number) {
                case 10:
                    echo "Ten";
                    break;
                case 11:
                    echo "Eleven";
                    break;
                case 12:
                    echo "Twelve";
                    break;
                case 13:
                    echo "Thirteen";
                    break;
                case 14:
                    echo "Fourteen";
                    break;
                case 15:
                    echo "Fiveteen";
                    break;
                case 16:
                    echo "Sixteen";
                    break;
                case 17:
                    echo "Eleventeen";
                    break;
                case 18:
                    echo "Eighteen";
                    break;
                case 19:
                    echo "Nineteen";
                    break;
            }
        }
        if ($number >=20 && $number <100){
            switch (floor($number/10)){
                case 2:echo "Twenty ";break;
                case 3: echo "Thirty "; break;
                case 4: echo "Fourty "; break;
                case 5: echo "Fitty "; break;
                case 6: echo "Sixty "; break;
                case 7: echo "Seventy "; break;
                case 8: echo "Eighty "; break;
                case 9: echo "Ninety "; break;
            }
            switch ($number%10){
                case 1: echo "one"; break;
                case 2: echo "Two"; break;
                case 3: echo "Three"; break;
                case 4: echo "Four"; break;
                case 5: echo "Five"; break;
                case 6: echo "Six"; break;
                case 7: echo "Seven"; break;
                case 8: echo "Eight"; break;
                case 9: echo "Nine"; break;
            }
        }
    }
}


