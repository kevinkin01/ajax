<?php
require_once "06-db.php";

$sql = "SELECT * FROM contenu ORDER BY id ASC LIMIT 0,20";
$recup = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
// pas de résultats
if(!mysqli_num_rows($recup)){
    echo "<h3>Pas encore de message!</h3>";
}else{
    while($item=mysqli_fetch_assoc($recup)){
        echo "{$item['ladate']} | {$item['nom']} | {$item['texte']}<br>";
    }
}
