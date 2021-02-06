<?php





echo date('d.m.Y G:i' , time())."<br>";

$synniaasta = 1999;
echo 'Kasutaja vanus on '.(date('Y') - $synniaasta)."<br>";

$praegu = new DateTime('2021-02-06');
$koolilopp = new DateTime('2021-06-06');
$paevad = $koolilopp->diff($praegu)->format('%a');
echo "Kool lõppeb ".$paevad." päeva pärast.".'<br>';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$tana = new DateTime();
$kevad = new DateTime('1. march');
$suvi = new DateTime('1. june');
$sugis = new DateTime('1. september');
$talv = new DateTime('1. december');


switch(true) {
    case $tana >= $kevad && $tana < $suvi:
        echo 'praegu on kevad';
        break;

    case $tana >= $suvi && $tana < $sugis:
        echo 'praegu on suvi!';
        break;

    case $tana >= $sugis && $tana < $talv:
        echo 'sügis';
        break;

    default:
        echo 'praegu on talv';
}