<?php
include 'student.php';
$student = new Students("Gavin", "Thomas", "01 Phu Dong Thien Vuong - Phuong 8 - Da Lat");
echo $student->greeting()."<br/>";
echo $student->getAddress();
?>