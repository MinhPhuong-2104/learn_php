<?php

function fWordCount($variable) {
    return str_word_count($variable);
}

echo "Số từ: " . fWordCount("Sodium Radium Potassium");