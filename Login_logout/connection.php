<?php
    require('config.php');
    $id_conexiune = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if (!$id_conexiune) {
        die('Eroare conectare la MySQL: ' . mysql_error());
    }
    mysql_select_db(DB_NAME, $id_conexiune) or die("Eorare la selectarea bazei de date " . mysql_error());
?>