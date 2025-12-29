<?php
header('Content-Type: application/json');
header('Cache-Control: no-store');

$file = __DIR__ . '/settings.json';

// Create file if missing
if (!file_exists($file)) {
    file_put_contents($file, '{}');
}

// READ
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo file_get_contents($file);
    exit;
}

// WRITE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw = file_get_contents("php://input");

    json_decode($raw);
    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid JSON"]);
        exit;
    }

    file_put_contents($file, $raw, LOCK_EX);
    echo json_encode(["success" => true]);
    exit;
}

http_response_code(405);
echo json_encode(["error" => "Method not allowed"]);
