<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    
    $vowelCount = preg_match_all('/[aeiou]/i', $str, $matches);


    $reversed = strrev($str);

    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}
?>
