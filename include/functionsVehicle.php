<?php
    /***
     * Checks if data is a valid number and is within min and max
     * @param double/int $var, int $min, int $max
     * @return true if in range; false is out of limits
     */
    function inRange($var, $min, $max)
    {
        return (is_string($var) || $var < $min || $var > $max || is_nan($var)) ? false : true;
    }
?>
