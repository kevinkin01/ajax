<?php
/**
 *
 * Affichage du temps au format datetime()
 *
 */
if(isset($_GET['lulu'])) echo "<h3>{$_GET['lulu']}</h3>";
for($i=0;$i<99999;$i++){
    echo $i*($i+2)." ";
}