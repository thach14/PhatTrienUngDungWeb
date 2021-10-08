<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Cộng trừ nhân chia</title>
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Practical
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="lt1.php">Practical 1</a></li>
          <li><a href="lt2.php">Practical 2</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exercise
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bt1.php">Bai 1</a></li>
          <li><a href="bt2.php">Bai 2</a></li>
          <li><a href="bt3.php">Bai 3</a></li>
          <li><a href="bt4.php">Bai 4</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<h1>Kết quả phép tính</h1>

<button type="button" class="btn btn btn-info" style="font-size: 200%;">
	<?php
  			
  			$pheptinh=$_GET["pheptinh"];
  			$num1= $_GET["num1"];
  			$num2= $_GET["num2"];

  			if ($pheptinh=="cong")
  			{
  				echo "$num1 + $num2 = ".($num1+$num2);
  			}
  			if ($pheptinh=="tru")
  			{
  				echo "$num1 - $num2 = ".($num1-$num2);
  			}
  			if ($pheptinh=="nhan")
  			{
  				echo "$num1 * $num2 = ".($num1*$num2);
  			}
  			if ($pheptinh=="chia")
  			{
  				if ($num2==0)
  				{
  					echo "Số chia không thể bằng 0";

  				}
  				else {echo "$num1 / $num2 = ".($num1/$num2);}
  			}
		

  		?>
</button>
<br>
<a href="pheptinh.php" class = "btn-outline-warning">Back</a>
</div>
</body>
</html>



