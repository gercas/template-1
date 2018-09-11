<?php
    $path = '/carkas/carkas/';
    include 'system/vendor/router.php';
    include 'system/routes.php';


    // Default application path
    // http://localhost/local/router-1/


    
    function url($url = '/')
    {
        global $path;
    
        return '/' . trim($path, '/') . '/' . trim($url, '/');
    }

    