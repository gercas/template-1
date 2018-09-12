<?php
global $path;

// Instantiate router
$router = new AltoRouter();
$router->setBasePath($path);
global $btn;
foreach ($buttons as $btn){

    $router->map('GET', $btn, function() {
        global $btn;
        require_once 'views/'.$btn;
    });

}


// Assign routes
$match = $router->match();

// Match route
if ($match && is_callable($match['target'])) {
    ob_start();
    call_user_func_array($match['target'], $match['params']);
    $view = ob_get_clean();
} else {
    // Route not matched
    ob_start();
    require_once 'views/404.php';
    $view = ob_get_clean();
}
