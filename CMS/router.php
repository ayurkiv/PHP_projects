<?php
file_put_contents(__DIR__ . '/router_log.txt', date('H:i:s') . " ROUTER FIRED: " . $_SERVER['REQUEST_URI'] . "\n", FILE_APPEND);

if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/index.php';
