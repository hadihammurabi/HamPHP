<?php

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 */

/**
 * Generate a random string.
 * @param int    $n
 * @param string $c
 */
function rstr($n = 32, $c = null)
{
    $c = $c!==null ? $c : "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890_____----";
    $len = strlen($c)-1;
    $r = "";
    for ($i=0; $i < $n; $i++) {
        $r .= $c[rand(0, $len)];
    }
    return $r;
}
