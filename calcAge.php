<?php 
	$year = $_GET['year'];
	$nowYear = date('Y');
 
 if ($year < $nowYear && !empty($year)) {
 	echo ($nowYear - $year). ' year old.';
 } else {
 	echo "Try agian.";
 }
 ?>

<!--  !empty() คือ คำสั่งให้ ต้องกรอกข้อมูลเข้าด้วยไม่งั้นคำนวณไม่ได้ -->