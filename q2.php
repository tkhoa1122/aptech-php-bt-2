<?php
function drawRightAngleTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Example
drawRightAngleTriangle(5);
?>
