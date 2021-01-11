<form>
    <input name="laius">
    <label for="laius">Laius</label><br>
    <br>
    <input name="korgus">
    <label for="korgus">Kõrgus</label>
</form>


<?php
$number = 1;
do{
    echo $number.".".'<br>';
    $number++;
} while($number <=100);
echo '<br>';
echo "*********";
echo '<br>';
echo '<br>';
$kordus = 1;
do{
    echo '*'.'<br>';
    $kordus++;
} while($kordus <=10);

$number1 = 10;
do{
    echo $number1.'<br>';
    $number1--;
} while($number1 > 0);
echo '<br>';

$nummer = 1;
do{
    if ($nummer % 3 == 0) {
        echo $nummer.'<br>';
    }
    $nummer++;
} while ($nummer <= 100);