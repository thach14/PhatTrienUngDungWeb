<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Đặng Ngọc Thạch (1812843)</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Đặng Ngọc Thạch</h1>
  <p>Tổng hợp các bài lab phát triển ứng dụng web</p>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">thach14</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical1-1.php" target="_blank">Practical 1.1</a></li>
          <li><a href="practical1-2.php" target="_blank">Practical 1.2</a></li>
          <li><a href="practical1-3.php" target="_blank">Practical 1.3</a></li>
          <li><a href="practical1-4.php" target="_blank">Practical 1.4</a></li>
          <li><a href="practical1-5.php" target="_blank">Practical 1.5</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 2
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical2-1.php" target="_blank">Practical 2.1</a></li>
          <li><a href="practical2-2.php" target="_blank">Practical 2.2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical 3
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="practical3-1.php" target="_blank">Practical 3.1</a></li>
          <li><a href="practical3-2.php" target="_blank">Practical 3.2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài tập 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bt1-1.php" target="_blank">Phương trình bậc nhất</a></li>
          <li><a href="bt1-2.php" target="_blank">Phương trình bậc hai</a></li>
          <li><a href="bt1-3.php" target="_blank">Kiểm tra tam giác</a></li>
          <li><a href="bt1-4.php" target="_blank">Bảng cửu chương</a></li>
          <li><a href="bt1-5.php" target="_blank">Ước chung bội chung</a></li>
        </ul>
      </li>
      <li class="active"><a href="bt2-1.php" target="_blank">Bài 2</a></li>
      <li class="active"><a href="bt3-1.php" target="_blank">Bài 3</a></li>
      <li class="active"><a href="bt4-1.php" target="_blank">Bài 4</a></li>
      <li class="active"><a href="bt5-1.php" target="_blank">Bài 5</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h3>Thông tin về file đã upload</h3>
<?php
$MAX_FILE_SIZE = 1000000; // khai bao kich thuoc max
// Step 1: Checking is method POST?
if ($_SERVER["REQUEST_METHOD"] != "POST" ) {
echo 'Upload not sucessfull (not POST)';
exit(-1);
} //end if
// Step 2: Checking upload processing.
if ( !isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] != 0 ) {
echo 'Upload not sucessfull (error upload processing)';
exit(-1);
} //end if
// Step 3: Checking is upload file size.
if ($_FILES["file_upload"]["size"] > $MAX_FILE_SIZE) {
echo "Upload not sucessfull (file size too large".$_FILES['file_upload']['size'].")";
exit(-1);
}
// Step 4: splite file name and check extension of file.
$temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);
$filename = $temp[count($temp)-1];
if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)){
echo 'Upload not sucessfull <br>';
echo 'Please, upload image file <br>';
exit(-1);
} //end if
// Step 5: move uploaded file to folder of server.
$upload_dir = "upload";
if(!file_exists($upload_dir))
mkdir("upload");
$upload_file = $upload_dir."/".$filename;
if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file) ) {
echo "Uploaded: ".$_FILES["file_upload"]["name"]."<br />";
echo "Type: ".$_FILES["file_upload"]["type"]."<br />";
echo "Size: ".($_FILES["file_upload"]["size"]/1024)." Kb<br />";
}
else {
echo 'Upload not sucessfull (error on server)';
}
?>
</div>  
</body>
</html>