<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Tính tiền karaoke</title>
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
	<h1 style="text-align: center;">Nhập giờ</h1>
<form action="tinhtien.php">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Nhập giờ lúc vào </span>
  </div>
  <input type = "text" name = "vao" class="form-control" placeholder="10h tới 24h">
	</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Nhập giờ lúc tan </span>
  </div>
  <input type = "text" name = "ra" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="10h -> 24h (sau giờ vào)">
	</div>

<input type = "Submit" value = "Tính tiền" class="btn btn-success">
</form>
</div>
</body>
</html>