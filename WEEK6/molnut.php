<?php

$Link=mysqli_connect(
'localhost',
'root',
'o937o24537',
'phphw');




if(isset($_POST["submit"])){

$scode = $_POST["exescode"];
			$name = $_POST["exename"];
			$tel = $_POST["exetel"];

$sql2 = "UPDATE personal SET name = '$name',tel = '$tel' WHERE code = '$scode'";
			$result=mysqli_query($Link, $sql2);
			
mysqli_close($Link);
    
        header('Location: resultnut.php');


}else{
	$scode=$_GET["scode"];

       $sqL2="SELECT * FROM  personal  WHERE code='$scode'";
			$result=mysqli_query($Link, $sqL2);
			$row = mysqli_fetch_assoc($result);
			$name = $row["name"];
			$tel = $row['tel'];
			
			//echo"<table border=1>";
echo "<form method='POST' action='molnut.php'>";
// echo"<tr>";
// 	echo"<td>";
// 	echo "姓名";
// 	echo"</td><td>";
// 	echo "電話";
// 	echo"</td>";
//echo"</tr>";


	//echo"<tr>";
	echo"<input type='hidden' value='$scode' name='exescode'><br>";
//	echo"<td>";
	echo "姓名:<input type='text' value='$name' name='exename'><br>";
//	echo"</td><td>";
	echo "電話:<input type='text' value='$tel' name='exetel'><br>";
	echo "<input type='submit'  name='submit'><br>";
	//echo"</td>";
//echo"</tr>";
//echo "<table>";
echo "</form>";
        
}







?>