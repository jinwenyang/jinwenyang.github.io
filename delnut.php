<?php

$Link=mysqli_connect(
'localhost',
'root',
'o937o24537',
'phphw');

$scode=$_GET["scode"];

        $sqL2="DELETE FROM personal  WHERE code='$scode'";
        $result=mysqli_query($Link, $sqL2);


        mysqli_close($Link);
        header('Location: resultnut.php');















?>