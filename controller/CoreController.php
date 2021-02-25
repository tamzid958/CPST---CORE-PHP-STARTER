<?php

namespace Controller {

    $files = dirname(__FILE__);

    foreach (glob($files . '/*.php') as $file) {
        $file = explode('/', $file)[1];
        if ($file != "CoreController.php") {
            require $file;
        }
    }
}
