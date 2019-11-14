<?php
$q = $_REQUEST["word"];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lm_db');
$l="delete from item where item_name=$q";
$status=mysqli_query($con,$l);
mysqli_close($con);
 ?>
