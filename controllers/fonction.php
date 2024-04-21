<?php
/**
 * display the content of $debug in f12 console like console.log()
 */
function console_log($debug) {
    echo '<script>';
    echo 'console.log(' . json_encode($debug) . ')';
    echo '</script>';
}
