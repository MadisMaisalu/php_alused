<html>
<body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<form method="post">
<input name="jagatis">
<input name="jagaja">
<input type="submit" name="submit">
</form>
    <br>
    <br>
    <br>
<form>
    <input name="isik1" id="isik1">
    <label for="isik1">Isik 1 vanus</label>
    <input name="isik2" id="isik2">
    <label for="isik2">Isik 2 vanus</label>
    <input name="submit2" type="submit" value="Kumb on vanem?">
    </form>
<br>
<p>Ristkülik või ruut?</p>
<form>
<input name="moode1"><p>Mõõde 1</p>
<input name="moode2"><p>Mõõde 2</p>
<input type="submit" name="submit3" value="Vajuta siia, et saada vastus">
</form>
<br>
<br>
<br>
<br>
<br>
<p>Juubel?</p>
<form>
<input name="synniaasta">
<input type="submit" name="submit6">
</form>
<br>
<br>
<br>
<form>
    <p>Sisesta punktid</p>
    <input name="punktid">
    <input type="submit" name="submit7">
</form>
</body>
</html>
<?php
/*Ülesanne 4 - Madis Maisalu - 26.11.20*/

$lause1 = "Sisestage number";

if(!empty($_POST['jagaja'])){
    if(isset($_POST['submit'])) {
    $jagatis = $_POST['jagatis'];
    $jagaja = $_POST['jagaja'];
    $vastus = ($jagatis/$jagaja);
    echo $vastus;
    }
}

if(!empty($_GET['moode1'])){
    if(isset($_GET['submit3'])) {
        $moode1 = $_GET["moode1"];
        $moode2 = $_GET["moode2"];
        if ($moode1 > $moode2) {
        echo "See on ristkülik";
        }
        if ($moode1 < $moode2) {
        echo "See on ristkülik";
        }
        if ($moode1 == $moode2) {
        echo "See on ruut";
        }
}
}

if(!empty($_GET['isik1'])){
    if(isset($_GET['submit2'])) {
        $isik1 = $_GET["isik1"];
        $isik2 = $_GET["isik2"];
        if ($isik1 > $isik2) {
            echo "Isik 1 on vanem";
        }
        if ($isik1 < $isik2) {
            echo "Isik 2 on vanem";
        }
        if ($isik1 == $isik2) {
            echo "Isikud on sama vanad";
        }
    }
}

if(!empty($_GET['synniaasta'])){
    if(isset($_GET['submit6'])) {
        $synniaasta = $_GET["synniaasta"];
        if ($synniaasta[-1] == 5 or $synniaasta[-1] == 0){
            echo "On juubeliaasta!";
        }
        else {
            echo "Ei ole juubeliaasta";
        }
    }
}

    if (!empty($_GET['punktid'])) {
        if (isset($_GET['submit7'])) {
            $punktid = $_GET["punktid"];
            if ($punktid == 10 or $punktid > 10) {
                echo "SUPER!";
            }
            if ($punktid >= 5 and $punktid < 10) {
                echo "TEHTUD!";
            }
            if ($punktid < 5) {
                echo "KASIN";
            }
            if ($punktid = ""){
                echo "Sisesta punktid";
            }
        }
    }
    else {
        echo "Sisesta punktid";
    }

?>

