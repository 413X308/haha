<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Get the raw POST data
        $rawData = file_get_contents('php://input');
        
        // Debug: Log raw input for troubleshooting
        // file_put_contents('debug.log', "Raw input: " . $rawData . "\n", FILE_APPEND);
        
        if (empty($rawData)) {
            throw new Exception('No data received');
        }

        // Decode the JSON input
        $data = json_decode($rawData, true);
        
        // Check if JSON decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Invalid JSON: ' . json_last_error_msg());
        }

        // Check if required fields exist and are not empty
        $requiredFields = ['domain', 'path', 'filename'];
        $missingFields = [];
        
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || trim($data[$field]) === '') {
                $missingFields[] = $field;
            }
        }
        
        if (!empty($missingFields)) {
            throw new Exception('Missing or empty required fields: ' . implode(', ', $missingFields));
        }

        // Alternative approach 1: Use filter_var for validation
        $domain = filter_var(trim($data['domain']), FILTER_SANITIZE_STRING);
        $path = filter_var(trim($data['path']), FILTER_SANITIZE_STRING);
        $filename = filter_var(trim($data['filename']), FILTER_SANITIZE_STRING);
        
        // Alternative approach 2: Direct access with null coalescing
        // $domain = rtrim($data['domain'] ?? '', '/');
        // $path = ltrim($data['path'] ?? '', '/');
        // $filename = $data['filename'] ?? '';
        
        // Alternative approach 3: Use array_key_exists for strict checking
        // if (array_key_exists('domain', $data) && array_key_exists('path', $data) && array_key_exists('filename', $data)) {
        //     $domain = rtrim($data['domain'], '/');
        //     $path = ltrim($data['path'], '/');
        //     $filename = $data['filename'];
        // }
        
        // Remove slashes
        $domain = rtrim($domain, '/');
        $path = ltrim($path, '/');
        
        // Additional validation
        if (empty($domain) || empty($filename)) {
            throw new Exception('Domain and filename cannot be empty after sanitization');
        }

        // Get current date and time
        $dateTime = date('d/m/Y H:i:s');
        
        // Get server IP (with fallback)
        $serverIP = $_SERVER['SERVER_ADDR'] ?? $_SERVER['LOCAL_ADDR'] ?? 'Unknown';

        $file = 'sys.txt';
        $fullPath = "$domain/$path";
        
        $content = "Domain: $domain\nDate: $dateTime\nServer IP: $serverIP\nFull Path: $fullPath\nFilename: $filename\n";

        // Create directory if it doesn't exist
        $dir = dirname($file);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        if (file_put_contents($file, "------\n$content", FILE_APPEND | LOCK_EX) === false) {
            throw new Exception('Failed to write to file');
        }
        
        // Success response
        echo json_encode([
            'success' => true,
            'message' => 'Data recorded successfully',
            'data' => [
                'domain' => $domain,
                'path' => $path,
                'filename' => $filename
            ]
        ]);
        
    } catch (Exception $e) {
        // Error response
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'error' => $e->getMessage(),
            'received_data' => isset($data) ? $data : 'No data parsed'
        ]);
    }
} else {
    // Method not allowed
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'error' => 'Only POST requests are allowed',
        'allowed_methods' => ['POST']
    ]);
}
?>
