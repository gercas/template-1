<?php
global $path;

// Instantiate router
$router = new AltoRouter();
$router->setBasePath($path);

// Register routes
$router->map('GET', '/', function() {
    require_once __DIR__ . '/views/welcome.php';
});
$router->map('GET', '/news', function() {
    require_once __DIR__ . '/views/news.php';
});
$router->map('GET', '/news/[i:id]', function($id) {
    require_once __DIR__ . '/views/news.php';
});
$router->map('GET', '/contact', function() {
    require_once '/views/contact.php';
});

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
