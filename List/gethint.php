<?php
// Array with names
$a = array('Apple','Bat','Cat');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lm_db');
$l="select*from item";
$result=mysqli_query($con,$l);
mysqli_close($con);

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";


// lookup all hints from array if $q is different from ""
if ($q !== "") {
   $q = strtolower($q);
   $len=strlen($q);
   foreach($result as $name) {
       if (stristr($q, substr($name["item_name"], 0, $len))) {
           if ($hint === "") {
               $hint = $name["item_name"];
           } else {
               $hint .= ", $name[item_name]";
           }
       }
   }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;



?>
