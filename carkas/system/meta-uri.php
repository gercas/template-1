<?php

    $uri = str_replace("$path",'',  $_SERVER['REQUEST_URI']);

    switch($uri)
    {
        case '/':
        ?>
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML,CSS,XML,JavaScript">
            <meta name="author" content="John Doe">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        break;
        case '/welcome':
        ?>
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML,CSS,XML,JavaScript">
            <meta name="author" content="John Doe">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php
        break;
        case '/contacts':
        ?>
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML,CSS,XML,JavaScript">
            <meta name="author" content="John Doe">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php
        break;
    }