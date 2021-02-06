
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        input {
            width: 500px;
            height: 100px;
            background-color: pink;
        }
    </style>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="nimi">Nimi</label>
    <input type="text" name="nimi"><br><br>
    <label for="sonum">Teade</label>
    <input type="text" name="sonum"><br><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>

<?php
$nimi = $_GET['nimi'];
$sonum = $_GET['sonum'];

echo 'Tervist '.ucwords($nimi).'!'."<br>";
$pikkus = strlen($nimi);
$form = implode('.',str_split($nimi));
echo $form.'.'."<br>";

$nimed = array('loll', 'taun', 'idioot');
$tsensuur = '****';
echo str_replace($nimed, $tsensuur, $sonum)."<br>";



$tapitahed = array('ö', 'õ', 'ä', 'ü');
$tapilainud = array('o', 'o', 'a', 'y');



$email = strtolower(str_replace($tapitahed, $tapilainud, $nimi))."@khk.ee";
echo str_replace(' ', '.', $email);
