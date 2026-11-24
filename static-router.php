<?php
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($path === '') {
    require __DIR__ . '/index.html';
    return;
}

$file = __DIR__ . DIRECTORY_SEPARATOR . $path . '.html';
if (is_file($file)) {
    require $file;
    return;
}

http_response_code(404);
echo '404 - Page not found';
