<?php
function fFilter_var($variable) {
    if(filter_var($variable, FILTER_VALIDATE_EMAIL)) {
        echo "\"$variable\" là 1 email hợp lệ";
    } else {
        echo "\"$variable\" không phải là 1 email hợp lệ";
    }
}

fFilter_var("Ntminhphuong202@gmail.com");