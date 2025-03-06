<?php
function random_int($min = 0, $max = 0) {
    if ($max < $min) {
        throw new Exception("The max value must be greater than min");
    }
    return rand($min, $max);
}
?>
