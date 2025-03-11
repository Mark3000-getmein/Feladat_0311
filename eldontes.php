<?php
$tomb=array(3, 1, 6, 4, 11);
$indexMax=count($tomb)-1;

$i=0;
while(($i < $indexMax) && !($tomb[$i]<=9))
{
    $i++;
}
if($i<($indexMax+1))
{
    echo "<br>";
    print("Nem létezik ilyen elem");
}
echo "<br>";
print($i);
?>
