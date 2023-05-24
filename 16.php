<?php

function fStrrchr($var_1_16, $var_2_16) {
    $return = strrchr($var_1_16, $var_2_16);
    if($return !== false && $return === substr($var_1_16, -strlen($var_2_16))){     
        echo "Chuỗi \"$var_1_16\" kết thúc bằng chuỗi con \"$var_2_16\"";
    } else {
        echo "Chuỗi \"$var_1_16\" không kết thúc bằng chuỗi con \"$var_2_16\"";
    }
}
fStrrchr("Baby don't cry","cry");
