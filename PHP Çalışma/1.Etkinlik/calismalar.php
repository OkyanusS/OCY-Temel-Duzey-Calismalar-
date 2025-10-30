<?php
$a= $_GET['sayi1'];
$b= $_GET['sayi2'];
echo"<table border='1'>";
for ($i=0; $i < $a; $i++) 
{
    echo"<tr>";
    for ( $j=0; $j < $b; $j++)
 {   
            echo"<td>x</td>";
 }
    echo "</tr>";
}
echo "</table>";
?>