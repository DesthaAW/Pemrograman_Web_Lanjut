<?php

$pathsConfig = include __DIR__ . '/../app/Config/Paths.php';

if (!is_array($pathsConfig)) {
    die('Paths.php not found or is not accessible.');
}

require $pathsConfig->systemDirectory . 'bootstrap.php';
