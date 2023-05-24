<?php
function fStrReplace($firstVar, $secondVar, $string) {
    echo "Chuỗi ban đầu: " . $string . "<br>";
    echo "Chuỗi sau khi thay thế: " . str_replace($firstVar, $secondVar, $string);
}
fStrReplace("you", "", "Hella heart eyes for you" );