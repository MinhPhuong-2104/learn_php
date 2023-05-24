<?php
function fTrim($variable) {
    $trimmedVar = trim($variable," ");
    echo "Chuỗi gốc: " . $variable . "<br>Thành chuỗi: " . $trimmedVar;
}
fTrim("  The truth is all lie  ");