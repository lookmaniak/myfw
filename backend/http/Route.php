<?php

require locate('/http/Request.php');

class Route {
    private static $route_collection = [];

    public static function set(Array $set) {

        foreach ($set as $key => $value) {
            $target = explode(':', $key);
            $method = strtolower($target[0]);
            $path = ltrim($target[1] ?? '');

            self::$route_collection["$method:$path"] = $value;
        }
        
    }

    public static function listen() {
        $path_info = strtolower(ltrim($_SERVER['PATH_INFO'], '/'));
        $request_method = strtolower($_SERVER['REQUEST_METHOD']);
    
        // Check if the route exists in the collection
        $route_found = self::$route_collection["$request_method:$path_info"] ?? null;
    
        // If no route found, call the route_notfound handler
        if (!$route_found) {
            return self::handleNotFound();
        }
    
        // Create an instance of the controller
        $instance = new $route_found[0]();
        
        // Create a Request object with the server data
        $request = new Request($_SERVER);
    
        // Call the appropriate method on the controller
        return call_user_func([$instance, $route_found[1]], $request);
    }
    
    // Method to handle not found routes
    private static function handleNotFound() {
        http_response_code(404); // Set the HTTP response code to 404
        $response = [
            'status' => 'error',
            'message' => 'Route not found'
        ];
    
        // Send the JSON response
        echo json_encode($response);
        exit; // Ensure no further output is sent
    }
}