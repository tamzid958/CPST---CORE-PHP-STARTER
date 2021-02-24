<?php
$files = basename(__DIR__);
foreach (glob($files . '/*.php') as $file) {
    $file = explode('/', $file)[1];
    if ($file != "CoreModel.php") {
        require_once $file;
    }
}
