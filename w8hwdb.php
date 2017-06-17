
<?php

$Link=mysqli_connect(
'localhost',
'root',
'o937o24537',
'phphw');


if($Link){
	echo "Connected !";
}else{
	echo "Connected Failed !";
}

echo "<br><br><br>";

$uname=$_POST["uname"];
$utel=$_POST["utel"];


$sqL2="INSERT INTO perdata (name,tel) VALUES ('$uname','$utel')";
$result=mysqli_query($Link, $sqL2);

$result=mysqli_query($Link,"SELECT*FROM perdata");


echo"<table border=1>";

echo"<tr>";
	echo"<td>";
	echo "No";
	echo"</td><td>";
	echo "姓名";
	echo"</td><td>";
	echo "電話";
	echo"</td>";

while($row=mysqli_fetch_assoc($result)){

	echo"<tr>";
	echo"<td>";
	echo $row["no"];
	echo"</td><td>";
	echo $row["name"];
	echo"</td><td>";
	echo $row["tel"];
	echo"</td>";
}
echo "<table>";


mysqli_close($Link);


?>
