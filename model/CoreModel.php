<?php

namespace Model {

    $files = dirname(__FILE__);
    foreach (glob($files . '/*.php') as $file) {
        $file = explode('/', $file)[1];
        if ($file != "CoreModel.php") {
            require $file;
        }
    }
}
