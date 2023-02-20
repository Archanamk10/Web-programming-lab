<?php
echo"sorted array</br>";
echo"=================</br>";
$stud=array("sachin","achu","paru","devu");
echo"<br>display the array using print_r()";
print_r($stud);
echo"array in ascending order</br>";
asort=$stud;
print_r($stud);
echo"array in decending order</br>";
arsort=$stud;
print_r($stud);
?>