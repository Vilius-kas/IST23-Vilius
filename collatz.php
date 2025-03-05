<?php
// PHP code goes here
$n=7;
$b=1;
print ("skaicius:".$n."<br>");
while($n != 1) {
	if ($n%2==0) {
		$n/=2;
	}
	else {
		$n=3*$n+1;
	}
	$b++;
	print ("skaicius:".$n."<br>");
}
print ("iteraciju skaicius:".$b);
?>