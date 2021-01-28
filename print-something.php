<?php
for ($i=0;$i<5;$i++){
    for ($j=0;$j<7;$j++){
        echo " ** ";
    }
    echo "<br>";
}

for ($i=0;$i<6;$i++) {
    echo "<br>";
    for ($j = 1; $j < $i; $j++) {
        echo " * ";
    }
}
echo "<br>";
for ($i=7;$i>=0;$i--){

    echo "<br>";
    for ($j=0;$j<$i;$j++){
        echo " ** ";

    }

}


