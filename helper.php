<?php
// Function to find the greatest common divisor (GCD)
function gcd($a, $b)
{
    while ($b !== 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

