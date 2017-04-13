
<HTML>


<?php

$year=$_GET["year"];
$pru=$_GET["pru"];
$loc=$_GET["loc"];
$gender=$_GET["gender"];
$uname=$_GET["uname"];
$upwd=$_GET["upwd"];
$list=$_GET["list"];
$ads=$_GET["ads"];



print"Down are your answers:<br><br>";

print"1.";
switch ($year) {
	case '1996':
		print "1996, right<br>";
		break;
	
	case '1':
		print "1, wrong<br>";
		break;

		case '19906':
		print "19906, wrong<br>";
		break;

		case '2996':
		print "2996, wrong<br>";
		break;
}


print"2.";
switch ($pru) {
	case '花盆':
		print "花盆, wrong<br>";
		break;
	
	case '衣服':
		print "衣服, wrong<br>";
		break;

		case '綜合堅果':
		print "綜合堅果, right<br>";
		break;

		case '小說':
		print "小說, wrong<br>";
		break;
}

print"3.";
switch ($loc) {
	case '貝克街':
		print "貝克街, wrong<br>";
		break;
	
	case '高雄市':
		print "高雄市, right<br>";
		break;

		case '亞特蘭提斯':
		print "亞特蘭提斯, wrong<br>";
		break;

		case '奧林帕斯山':
		print "奧林帕斯山, wrong<br>";
		break;
}



print "--------------------<br/>";

print "your data:";
print "<br/><br/>";


print "name:".$uname."<br/>";
print "phone number:".$upwd."<br/>";
//echo "email:".$uem."<br/>";



if($gender=="male"){
	print "your gender is male<br/>";
}else{
	print "your gender is Female<br/>";
	print "<body bgcolor='purple'>";
}
print "address:";

switch ($list) {
	case 'Taipei':
		print "台北";
		break;
	
	case 'Taichung':
		print "台中";
		break;

		case 'Kaohsiung':
		print "高雄";
		break;

		case 'Tainan':
		print "台南";
		break;

}
 print "市".$ads."<br/>";

//$interest=$_GET["interest"];

//echo "�A������:";
//foreach ($interest as $data{
//	echo " ". $data;
//}
//echo "<br/>;

?>

</HTML>
