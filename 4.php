<?php
function fStrpos($string, $search) {
    return strpos($string, $search);
}

echo "Vị trí: " . fStrpos("If you take care of things, they last ", "you");