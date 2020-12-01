<?php
/*Ülesanne 3 - Madis Maisalu - 24.11.20*/

?>
<html>
<body>
<form action="" method="get">
<input id="1" name="1"></input>
<label for="1">Sisesta siia kõrgus</label>
<br>
<input id="2" name="2"></input>
<label for="2">Sisesta siia laius</label>
<br>
<input id="3" name="3"></input>
<label for="3">Sisesta siia alus 1(rombi külg ka)</label>
<br>
<input id="4" name="4"></input>
<label for="4">Sisesta siia alus 2</label>
<br>



<input type="submit" id="5">
</form>
<?php

$korgus = $_GET['1'];
$laius = $_GET['2'];
$alus1 = $_GET['3'];
$alus2 = $_GET['4'];

echo "Trapetsi pindala on ".($alus1+$alus2)/2*$korgus.'<br>';
echo "Rombi ümbermõõt on ".(4*$alus1);

?>
</body>
</html>