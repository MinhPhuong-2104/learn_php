<?php
function fPreg_replace($var_1_18, $var_2_18) {
    $var_3_18 = '/[^a-zA-Z0-9]/';
    echo $var_1_18 ."<br>=>". preg_replace($var_3_18, $var_2_18, $var_1_18);;
}

echo fPreg_replace("I love you more than i can say", "_");