<?php

function fStr_pad($string_15) {
    return str_pad($string_15, 32, "*", STR_PAD_BOTH);
}
echo "Họ tên: " . fStr_pad("Nguyễn Thị Minh Phương") . "<br>";