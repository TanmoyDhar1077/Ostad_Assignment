<?php

/* for ($i = 1; $i <= 50; ++$i) {
    if ($i == 5) {

        continue;
    }
    echo $i;
    echo PHP_EOL;
}
echo "==============\n";

for ($i = 1; $i <= 50; $i++) {
    if ($i < 5) {
        echo $i;
        echo PHP_EOL;
        continue;
    }
} */
// I do not untersant the question so i did this in two way 


    for($i = 1; $i <= 50; $i++){
        if($i % 5 == 0):
            continue; // Skip multiples of 5
        endif;
        echo $i.PHP_EOL;
    }