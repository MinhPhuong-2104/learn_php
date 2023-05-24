<?php
function fLtrim($variable) {
    echo "Loại bỏ kí tự \"$variable[0]\" ở đầu chuỗi \"$variable\"" . "<br>Chuỗi sau khi loại bỏ kí tự đầu: " . ltrim($variable, $variable[0]);
}
fLtrim("sstep by step");