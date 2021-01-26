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
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $height =$_POST["height"];
    if ($height >=0 && $height <10){
        switch ($height) {
            case 0: echo "Zero"; break;
            case 1: echo "One"; break;
            case 2: echo "Two"; break;
            case 3: echo "Three"; break;
            case 4: echo "Four"; break;
            case 5: echo "Five"; break;
            case 6: echo "Six"; break;
            case 7: echo "Seven"; break;
            case 8: echo "Eight"; break;
            case 9:echo "Nine"; break;
//            default:
//                echo "Out of ability";break;
        }if ($height >=10 && $height <20){
            switch ($height){
                case 10:echo "Ten"; break;
                case 11:echo "Eleven"; break;
                case 12:echo "Twelve"; break;
                case 13:echo "Thirteen"; break;
                case 14:echo "Fourteen"; break;
                case 15:echo "Fiveteen"; break;
                case 16:echo "Sixteen"; break;
                case 17:echo "Eleventeen"; break;
                case 18:echo "Eighteen"; break;
                case 19:echo "Nineteen"; break;
            }
        }
    }

}