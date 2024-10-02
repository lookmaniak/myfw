<?php
require 'http/Route.php';
require 'app/routes/api.php';
require 'http/Response.php';
require 'app/controllers/HomeController.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set the content type to JSON
header('Content-Type: application/json');

// Allow from any origin
header('Access-Control-Allow-Origin: *');

// Allow specific methods
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Allow specific headers (customize as needed)
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

function response() {
    http_response_code(200); // Set a custom status code
    return new Response(); // This should return a single instance
}

function locate($path) {
    return dirname(__DIR__) .'/backend'. $path;
}

Route::listen();
