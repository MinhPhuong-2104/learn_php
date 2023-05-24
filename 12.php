<?php
/
function fRtrim($variable) {
    $lastCharacter = $variable[strlen($variable) - 1];
    echo  "Loại bỏ kí tự \"$lastCharacter\" ở đầu chuỗi \"$variable\"" . "<br>Chuỗi sau khi loại bỏ kí tự đầu: " . rtrim($variable,$lastCharacter );
}
fRtrim("Why don't you stay?");