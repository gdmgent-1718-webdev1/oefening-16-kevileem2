<?php

spl_autoload_register(function($name) {
    $path = "${name}.php";
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    require_once $path;
});
