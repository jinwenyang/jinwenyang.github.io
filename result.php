<HTML>


<?php

$input1=$_GET["year"];
$input2=$_GET["pru"];
$input3=$_GET["loc"];
$gender=$_GET["gender"];
$uname=$_GET["uname"];
$upwd=$_GET["upwd"];

$ads=$_GET["ads"];



//echo "你的回答:";

//if($input1=="1"){
//	echo "第一題是1<br/>";
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
//echo "第一題是:".$."<br/>";
//echo "第二題是:".$input2."<br/>";
//echo "第三題是:".$input3."<br/>";


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

//echo "你的興趣:";
//foreach ($interest as $data{
//	echo " ". $data;
//}
//echo "<br/>;

?>

</HTML>