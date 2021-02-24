<?php
$files = dirname(__FILE__);

foreach (glob($files . '/*.php') as $file) {
    require_once $file;
}
