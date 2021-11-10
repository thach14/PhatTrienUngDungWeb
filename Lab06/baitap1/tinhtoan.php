<?php
$x = $_GET['x'];
$y = $_GET['y'];
$pheptinh = $_GET['pheptinh'];
if ($pheptinh == "cong"){
    echo $x + $y;
}
if ($pheptinh == "tru"){
    echo $x - $y;
}
if ($pheptinh == "nhan"){
    echo $x * $y;
}
if ($pheptinh == "chia"){
    if ($y==0) echo "Khong the chia cho so 0";
    else
    echo $x / $y;
}
?>