<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</title>
</head>

<body>
<div align="center">
   
   <h2>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</h2>

<?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
  case 1:
    $coin_m=3.8;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." Japan (JP)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." Japan (JP)";
    break;
  case 2:
    $coin_m=50;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." Korea (KR)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." Korea (KR)";
    break;
  case 3:
    $coin_m=600;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." China (CN)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." China (CN)";
    break;



     ?>
 
</div>
</body>
</html>