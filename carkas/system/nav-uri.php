<?php

    $uri = str_replace("$path",'',  $_SERVER['REQUEST_URI']);

    switch($uri)
    {
        case '/':
            echo $words['home'];
        break;
        case '/welcome':
            echo $words['home'];
        break;
        case '/contacts':
            echo $words['contacts'];
        break;
    }