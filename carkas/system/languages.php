<?php

    if(!empty($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];

        $uri = str_replace("?lang={$_GET['lang']}",'',$_SERVER['REQUEST_URI']);
        header('location:http://'.$_SERVER['HTTP_HOST'].''.$uri);
    }
    elseif(empty($_SESSION['lang']))
    {
        $_SESSION['lang'] = 'lt';
    }

    include 'system/languages/'. $_SESSION['lang'] .'.php';