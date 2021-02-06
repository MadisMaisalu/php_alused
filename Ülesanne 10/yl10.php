<!DOCTYPE html>
<html lang="en">
<body>

    <a href="yl10.php">pealeht</a>
    <a href="yl10.php?leht=esimene">esimene</a>
    <a href="yl10.php?leht=teine">teine</a>


        <?php
        if(!empty($_GET['leht'])){
            $leht = htmlspecialchars($_GET['leht']);
            $sobivad = array('esimene','teine');
            $check = in_array($leht, $sobivad);
            if ($check==true) {
                include($leht.'.php');
            } else {
                echo 'leht netu';
            }
        } else {
            ?>

            <h1">Kui sa siia jõudsid, siis on pekkis</h1>
            <?php
        }
        ?>
</body>
</html>

