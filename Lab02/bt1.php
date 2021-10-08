<html>
   <head>
      <title>Chèn phần tử vào mảng trong PHP</title>
      <!-- Latest compiled and minified CSS -->
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
      
	<input type="text" id= "text1" name="textbox"/ class="form-control" placeholder="Nhập số phần tử trong mảng" aria-label="Nhập số phần tử trong mảng" aria-describedby="basic-addon2">
	<button onclick="taoinput()" class="btn btn-outline-secondary">OK</button>
   <h1> Nhập giá trị cho các phần tử trong mảng </h1>
   <form action="mang.php" method="POST">
   <div id="container"></div>
   <script type="text/javascript">
      function taoinput() {
         so = parseInt(document.getElementById('text1').value);
         for (i = 0; i < so; i ++)
         {
            var input = document.createElement("input");
               input.type = "text";
               input.name = "array[]"; // set the CSS class
               container.appendChild(input); // put it into the DOM
         }
      }
   </script>
   <input type="text" id= "text1" name="timx"/ class="form-control" placeholder="Nhập giá trị cần tìm trong mảng">
   <input type="text" id= "text1" name="suax"/ class="form-control" placeholder="Nhập giá trị cần sửa">
   <input type="text" id= "text1" name="ganx"/ class="form-control" placeholder="Nhập giá trị mới">
   <input type="text" id= "text1" name="xoax"/ class="form-control" placeholder="Nhập giá trị cần xóa">
   <input type="submit" value="Send" name="Submit" class="btn btn-outline-secondary">
	</form>
 
 </div>
   </body>
 
</html>