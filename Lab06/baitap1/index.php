<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Nhap so nhu nhat:</h3>
    <input type="text" id = "x" class="form-control"> 
    <h3>Chon phep tinh:</h3>
    <select name="pheptinh" id="pheptinh">
        <option value="cong">+</option>
        <option value="tru">-</option>
        <option value="nhan">*</option>
        <option value="chia">/</option>
    </select>
    <h3>Nhap so nhu hai:</h3>
    <input type="text" id = "y" class="form-control">
    <button onclick="tinh();">=</button>
    <h3>Ket qua:</h3>
    <div id = "ketqua"></div>
    <script>
        function tinh(){
            var x = document.getElementById("x").value;
            var y = document.getElementById("y").value;
            var pheptinh = document.getElementById("pheptinh").value;
            var ajax = new XMLHttpRequest();
            ajax.open("GET","tinhtoan.php?x="+x+"&y="+y+"&pheptinh="+pheptinh+"");
            ajax.send();
            ajax.onload = function(){
                document.getElementById("ketqua").innerHTML = this.responseText;
            }

        }
    </script>
    </div>
</body>
</html>