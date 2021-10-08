
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<h2>Giải phương trình bậc hai 1 ẩn</h2>
<form action="bt1-2.php" method="POST">
<input type="number" name="txtA" placeholder="Nhập a =" class="form-control">
<input type="number" name="txtB" placeholder="Nhập b =" class="form-control">
<input type="number" name="txtC" placeholder="Nhập c =" class="form-control">
<input type="submit" name="submit" class="btn btn-success">
<br>
</form>
<br>
<?php
if(isset($_POST["txtA"]) && isset($_POST["txtB"]) && isset($_POST["txtC"]))
{
	$a = $_POST["txtA"];
	$b = $_POST["txtB"];
	$c = $_POST["txtC"];
	if($a == 0)
	{
		if ($b==0) 
		{
			if ($c==0) echo "Phương trình có vô số nghiệm";
			else echo "Phương trình vô nghiệm";
		}
	}
	else 
	{
		$delta = $b*$b - 4*$a*$c;
		if ($delta < 0)
			echo "Phương trình vô nghiệm";
		else if ($delta ==0)
			echo "Phương trình có một nghiệm kép: ".(-$b/(2*$a));
		else "Phương trình có 2 nghiệm là: ".((- $b + sqrt ( $delta )) / (2 * $a))." và: ".((- $b - sqrt ( $delta )) / (2 * $a));
	}
}
?>
</div>  
</body>
</html>