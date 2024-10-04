<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['domain'], $data['path'], $data['filename'])) {
        $domain = $data['domain'];
        $path = $data['path'];
        $filename = $data['filename'];
        
        // Lấy ngày giờ hiện tại
        $dateTime = date('Y-m-d H:i:s');

        $file = 'sys.txt';
        // Cấu trúc nội dung với ngày giờ và tên miền đầy đủ
        $content = "Date: $dateTime\nDomain: $domain\nPath: $path\nFilename: $filename\n";

        file_put_contents($file, "------\n$content", FILE_APPEND);
    }
}
?>
