<?php

if (!extension_loaded("FFI")) {
	die("FFI extension required\n");
}

$ffi = FFI::load(__DIR__.'/nautilus.h');

var_dump($ffi);