<?php
/*Ülesanne 1 - Madis Maisalu - 24.11.20*/

$muutuja1 = 10;
$muutuja2 = 20;

echo $muutuja1-$muutuja2.'<br>';
echo $muutuja1+$muutuja2.'<br>';
echo $muutuja1*$muutuja2.'<br>';
echo $muutuja1/$muutuja2.'<br>';

$millimeetrid = 12;
$sentimeetrid = $millimeetrid/10;
$meetrid = $sentimeetrid/100;

echo $millimeetrid.'<br>'.$sentimeetrid.'<br>'.$meetrid.'<br>';

$alus = 10;
$kulg = 5;
$korgus = 20;
$vastus = ($alus*$korgus)/2;

echo "Kolmnurga pindala on ".$vastus." ning ümbermõõt on ".$kulg*3;