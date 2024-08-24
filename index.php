<?php
    $routes = [
        '/dashboard' => 'list.php',
        '/customer' => 'customer.html',
        '/store' => 'store.php',
        '/delete' => 'delete.php',
        '/update' => 'update.php',
        '/edit' => 'edit.php',
        '/profile' => 'profile.php',
    ];
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$query_string = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

if (array_key_exists($request_uri, $routes)) {
    include $routes[$request_uri];
// } elseif (preg_match('/^\/delete/', $request_uri) && strpos($query_string, 'id=') !== false) {
//     include $routes['/delete'];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>