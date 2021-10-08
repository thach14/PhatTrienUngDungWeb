<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cộng trừ nhân chia</title>
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
<form action="ketquapheptinh.php">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Số thứ nhất</span>
  </div>
  <input type = "number" name = "num1" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Số thứ hai</span>
  </div>
  <input type = "number" name = "num2" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
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

<input type = "Submit" value = "Tính" class="btn btn-success" style="padding-left: 10px">
</form>
</div>
</body>
</html>