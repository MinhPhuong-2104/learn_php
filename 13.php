<?php

function fExplode($character,$variable) {
    $array = explode($character,$variable);
    return $array;
}
print_r(fExplode(",","If it's easy to give up, it's not sincere"));