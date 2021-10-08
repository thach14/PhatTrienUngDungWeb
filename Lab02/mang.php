<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Document</title>
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
	<h2> Mảng vừa nhập là </h2>
	<?php 
	$mang = $_POST['array'];
	foreach( $mang as $v ) {
		echo $v."<br>";
	}
	$max = max($mang);
	echo "Giá trị lớn nhất trong mảng: ".$max."<br>";

	$min = min($mang);
	echo "Giá trị nhỏ nhất trong mảng: ".$min."<br>";
	if (in_array($_POST['timx'], $mang))
	{
		echo "Tìm thấy giá trị ".$_POST['timx']." trong mảng tại vị trí ". (array_search($_POST['timx'], $mang))+1;
		echo "<br>";
	}
	else
	{
		echo "Không tìm thấy <br>";
	}

	if (in_array($_POST['suax'], $mang))
	{
		$mang[array_search($_POST['suax'], $mang)] = $_POST['ganx'];
		echo "Mảng mới sau khi thay giá trị: ".$_POST['suax']." bằng giá trị ".$_POST['ganx']."<br>";
		foreach($mang as $v)
		{
			echo $v."<br>";
		}
	}
	else
	{
		echo "Không tìm thấy <br>";
	}

	if (in_array($_POST['xoax'], $mang))
	{
		unset($mang[array_search($_POST['xoax'], $mang)]);
		echo "Đã xóa phần tử ".$_POST['xoax']." trong mảng. Mảng mới là:<br>";
		foreach($mang as $v)
		{
			echo $v."<br>";
		}
	}
	sort($mang);
	echo "<br> Mảng sau khi sắp xếp tăng dần: <br>";
	foreach( $mang as $v ) {
		echo $v."<br>";
	}

	rsort($mang);
		echo "<br> Mảng sau khi sắp xếp giảm dần: <br>";
		foreach( $mang as $v ) {
			echo $v."<br>";
		}
	
		?>
		</div>
</body>
</html>