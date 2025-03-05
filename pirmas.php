<?php
// PHP code goes here


include 'coolatz.php';


for($i=$start; $i<=$end; $i++) {
    $n=$i;
    $b=0;
    $max=$n;
    while ($n != 1) {
        if ($n % 2 == 0) 
		{
        $n/=2;
        } 
		else 
		{
        $n=3*$n+1;
        }
        $b++;
    



?>