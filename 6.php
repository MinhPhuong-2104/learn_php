<?php
function fStrncmp($string, $var) {
    // biến thứ 3 biểu thị cho số kí tự đầu tiên được so sánh
    $check = strncmp($string, $var, $length = strlen($var)); 
    if($check === 0){
        echo "Chuỗi \"$string\" bắt đầu bằng \"$var\"";
    } else {
        echo "Chuỗi \"$string\" không bắt đầu bằng \"$var\"";
    }   
}

fStrncmp("I need a six month holiday, twice a year","I hope you enjoy a wonderful holiday, warmest wishes");