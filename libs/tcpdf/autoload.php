<?php
// Autoload TCPDF classes
function autoload($class) {
    $classPath = 'libs/tcpdf/' . $class . '.php'; // Sesuaikan path ini dengan lokasi file TCPDF
    if (file_exists($classPath)) {
        require_once $classPath;
    }
}

spl_autoload_register('autoload');
