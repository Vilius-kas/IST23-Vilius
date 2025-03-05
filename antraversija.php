<?php
// PHP code goes here
$start=1;
$end=pow(3, 2);
$res= [];

// didz reiksme
$mv=0;
$mv2=0;

// daugiausia iteraciju
$mv3=0;
$mv4=0;

// maziausiai iteraciju
$mv5=99999999;
$mv6=0;

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
        if ($n > $max) 
		{
            $max = $n;
        }
    }

    $res[$i]=[$b, $max]; // $b yra iteracijos, o $max didziausia reiksme
    
    if ($max > $mv) // didz reiksme
    {
        $mv=$max;
        $mv2=$i;
    }

    if ($b > $mv3) // daugiausia iteraciju
    {
        $mv3=$b;
        $mv4=$i;
    }

    if ($b < $mv5) // maziausiai iteraciju
    {
        $mv5=$b;
        $mv6=$i;
    }
}

echo "didziausias skaicius pasiektas: $mv skaicius: $mv2", "<br>";
echo "skaicius turintis daugiausia iteraciju: $mv3 iteraciju skaicius: $mv4", "<br>";
echo "skaicius turintis maziausiai iteraciju: $mv5 iteraciju skaicius: $mv6", "<br>";

?>
