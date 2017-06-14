<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data"> 




<?php
$num=$_POST["num"];
//$number=(int)$num;
for($i=1;$i<=$num;$i++)
echo'<input type="file" name="upload"><br>';

?>

<input type="submit" value="upload">
</form>
</body>
</html>