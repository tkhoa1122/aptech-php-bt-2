<?php
function drawIsoscelesTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}

// Example
drawIsoscelesTriangle(5);
?>
