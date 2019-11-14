<?php
$q = $_REQUEST["word"];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lm_db');
$l="insert into item value ('$q')";
$status=mysqli_query($con,$l);
mysqli_close($con);
 ?>
