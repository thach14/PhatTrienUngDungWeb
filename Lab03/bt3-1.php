<?php session_start();
?>
<html>
<head>
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
<form action="" method="GET">
<input type="text" name="num1">
<input type="text" name="num2">
<br>
<h2>Phép tính:</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pheptinh" id="flexRadioDefault1" value = "cong">
  <label class="form-check-label" for="flexRadioDefault1">
   (+) Cộng
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pheptinh" id="flexRadioDefault1" value = "tru">
  <label class="form-check-label" for="flexRadioDefault1">
   (-) Trừ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pheptinh" id="flexRadioDefault1" value = "nhan">
  <label class="form-check-label" for="flexRadioDefault1">
   (*) Nhân
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pheptinh" id="flexRadioDefault1" value = "chia">
  <label class="form-check-label" for="flexRadioDefault1">
   (/) Chia
  </label>
</div>
<input type="submit" name="submit">
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['pheptinh']))
{
  $_SESSION['so_thu_nhat']=$_GET['num1'];
$_SESSION['so_thu_hai']=$_GET['num2'];
$_SESSION['phep_tinh']=$_GET['pheptinh'];
echo "set session";
}

?>
<br/>
<a href="ketquapheptinh.php">Go to getsession</a>
</div>
</body>
</html>