<HTML>


<?php

$input1=$_GET["year"];
$input2=$_GET["pru"];
$input3=$_GET["loc"];
$gender=$_GET["gender"];
$uname=$_GET["uname"];
$upwd=$_GET["upwd"];

$ads=$_GET["ads"];



//echo "�A���^��:";

//if($input1=="1"){
//	echo "�Ĥ@�D�O1<br/>";
//}else{
//	echo "your gender is Fmale<br/>";
//	echo "<body bgcolor='purple'>";
//}
//if($gender=="male"){
//	echo "your gender is male<br/>";
//}else{
//	echo "your gender is Fmale<br/>";
//	echo "<body bgcolor='purple'>";
//}
//if($gender=="male"){
//	echo "your gender is male<br/>";
//}else{
//	echo "your gender is Fmale<br/>";
//	echo "<body bgcolor='purple'>";
//}
//echo "�Ĥ@�D�O:".$."<br/>";
//echo "�ĤG�D�O:".$input2."<br/>";
//echo "�ĤT�D�O:".$input3."<br/>";


echo "your data:";

echo "name:".$uname."<br/>";
echo "phone number:".$upwd."<br/>";
//echo "email:".$uem."<br/>";
echo "address:".$ads."<br/>";


if($gender=="male"){
	echo "your gender is male<br/>";
}else{
	echo "your gender is Fmale<br/>";
	echo "<body bgcolor='purple'>";
}

//$interest=$_GET["interest"];

//echo "�A������:";
//foreach ($interest as $data{
//	echo " ". $data;
//}
//echo "<br/>;

?>

</HTML>