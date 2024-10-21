<!DOCTYPE html>
<html lang="en">

<body>

//tambah
<?php
$x = 19;  
$y = 6;

echo $x + $y;
?> 

//kurang
<?php
$x = 19;  
$y = 6;

echo $x - $y;
?> 

//kali
<?php
$x = 5;  
$y = 6;

echo $x * $y;
?>  

//bagi
<?php
$x = 10;  
$y = 2;

echo $x / $y;
?>  

//modulus (sisa pembagian)
<?php
$x = 13;  
$y = 5;

echo $x % $y;
?>  

//exponen (pangkat)
<?php
$x = 5;  
$y = 3;

echo $x ** $y;
?>

//x=y
<?php
$x = 101;  
echo $x;
?> 

//x+=y
<?php
$x = 20;  
$x += 100;

echo $x;
?>

//equal
<?php
$x = 50;  
$y = "50";

var_dump($x == $y);
?>

//identical
<?php
$x = 100;  
$y = 50;

var_dump($x === $y);
?>
    
</body>
</html>