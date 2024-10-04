<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['domain'], $data['path'], $data['filename'])) {
        $domain = rtrim($data['domain'], '/'); // Đảm bảo không có dấu '/' ở cuối
        $path = ltrim($data['path'], '/'); // Đảm bảo không có dấu '/' ở đầu
        $filename = $data['filename'];
        
        // Lấy ngày giờ hiện tại
        $dateTime = date('Y-m-d H:i:s');

        $file = 'sys.txt';
        // Cấu trúc nội dung với ngày giờ và tên miền đầy đủ
        $fullPath = "$domain/$path/$filename"; // Tạo đường dẫn đầy đủ
        $content = "Date: $dateTime\nFull Path: $fullPath\n";

        file_put_contents($file, "------\n$content", FILE_APPEND);
    }
}
?>
