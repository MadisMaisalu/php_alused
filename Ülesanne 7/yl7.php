<?php
function tervitus(){
    return "Tere, päikene!";
}

echo tervitus();

function bootstrap(){
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    <h1>Bootstrapi uudiskirjaga liitumine</h1>
    <form>
        <label for="nimi">Eesnimi</label>
        <input type="text" name="nimi" id="nimi"><br><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br><br>
        <button>Liitu</button>
    </form>
    </body>
    </html>
    <?php
}

return bootstrap();

?>