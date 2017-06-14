<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>倒數</title>






</head>

<body >
<?php
date_default_timezone_set("Asia/Taipei");
?>

<img src="logo-<?php echo Date("m");?>.jpg" width="400" height="205">

<br><br><br><br>

<?php




echo date('Y年n月j日 h時i分s秒 l')."<br/><br/><br/>";


echo "世界末日是2017年12月31日<br>";
$now=date("U");
$end=mktime(23,59,59,12,30,2017);
$time=$end-$now;
$showd=intval($time/60/60/24);
$showh=intval(($time/60/60)-($showd*24));
$showm=intval(($time/60)-($showd*24*60)-($showh*60));
$shows=intval(($time)-($showd*24*60*60)-($showh*60*60)-($showm*60));

echo "距離世界末日還有".$showd."日".$showh."時".$showm."分".$shows."秒";




?>










</body>
</html>