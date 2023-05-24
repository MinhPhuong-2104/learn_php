<?php
function fStrstr($var_1_17, $var_2_17) {
    $return = strstr($var_1_17, $var_2_17); 
    if ($return != false ) { 
        $newString = "";
        for($i = 0; $i < strlen($var_2_17); $i++){ 
            $newString = $newString . $return[$i];
        }
        if($newString == $var_2_17) {
            echo "Chuỗi \"$var_1_17\" chứa chuỗi con \"$var_2_17\" ";
        } else {
            echo "Chuỗi \"$var_1_17\" không chứa chuỗi \"$var_2_17\"";
        }
    } else {
        echo "Chuỗi \"$var_1_17\" không chứa chuỗi con \"$var_2_17\" ";
    }
}
fStrstr("single but not available", "but");