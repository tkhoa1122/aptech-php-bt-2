<?php
function isLeapYear($year) {
    if ($year % 400 == 0) {
        return true;
    } elseif ($year % 100 == 0) {
        return false;
    } elseif ($year % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

// Example
$year = 2024;
if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>
