<?php

function fIs_int($variable) {
    if (is_int($variable)){
        echo "\"$variable\" là một số nguyên";
    } else {
        echo "\"$variable\" không phải là một số nguyên";
    }
}

fIs_int(12);
echo "<br>";
fIs_int("There is life");