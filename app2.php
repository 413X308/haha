<?php
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

        file_put_contents($file, "------\n$content", FILE_APPEND);
    }
}
?>
