<?php

    session_start();

    include 'config.php';
    include 'system/vendor/router.php';
    include 'routes.php';
    include 'system/languages.php';

    // Default application path
    // http://localhost/local/router-1/


    
    function url($url = '/')
    {
        global $path;
        return '/' . trim($path, '/') . '/' . trim($url, '/');
    }

    include 'template/page.php';