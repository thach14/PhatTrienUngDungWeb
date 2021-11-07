<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="" method="GET">
	<input type="number" name="tu1" placeholder="Nhap tu phan so thu nhat">
	<input type="number" name="mau1" placeholder="Nhap mau phan so thu nhat">
	<input type="number" name="tu2" placeholder="Nhap tu phan so thu hai">
	<input type="number" name="mau2" placeholder="Nhap mau phan so thu hai">
	<input type="submit" name="submit">
</form>
<?php
include 'phanso.php';
if(isset($_GET['tu1']) && isset($_GET['tu2']) && isset($_GET['mau1']) && isset($_GET['mau2'])){
$ps1 = new PhanSo($_GET['tu1'],$_GET['mau1']);
echo 'Phan so thu nhat la: '.$ps1->xuat().'<br>';
$ps2 = new PhanSo($_GET['tu2'],$_GET['mau2']);
echo 'Phan so thu hai la: '.$ps2->xuat().'<br>';
echo 'Cong hai phan so: '.$ps1->cong($ps2);
echo 'Tru hai phan so: '.$ps1->tru($ps2);
echo 'Nhan hai phan so: '.$ps1->nhan($ps2);
echo 'Chia hai phan so: '.$ps1->chia($ps2);
}
?>
</body>
</html>

