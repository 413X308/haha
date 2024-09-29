<?php
$servername = "127.0.0.1";
$username = "globalpetcab_user";
$password = "(6~leD0!$2.3";
$dbname = "globalpetcab_system";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách tất cả các bảng trong cơ sở dữ liệu
$tables = $conn->query("SHOW TABLES");

if ($tables->num_rows > 0) {
    // Duyệt qua từng bảng
    while ($table = $tables->fetch_array()) {
        $table_name = $table[0];
        echo "Dữ liệu từ bảng: $table_name<br>";

        // Truy vấn tất cả dữ liệu từ bảng
        $sql = "SELECT * FROM `$table_name`";
        $result = $conn->query($sql);

        // Kiểm tra và hiển thị dữ liệu
        if ($result->num_rows > 0) {
            // Lấy tên cột
            $fields = $result->fetch_fields();
            
            // Hiển thị tiêu đề cột
            foreach ($fields as $field) {
                echo $field->name . "\t";
            }
            echo "<br>";

            // Hiển thị dữ liệu cho mỗi hàng
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $value) {
                    echo $value . "\t";
                }
                echo "<br>";
            }
        } else {
            echo "Không có dữ liệu nào trong bảng $table_name.<br>";
        }

        echo "<br><br>"; // Ngắt giữa các bảng
    }
} else {
    echo "Không có bảng nào trong cơ sở dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>
