<?php 

foreach($_POST as $nombre_campo => $valor){

    $asignacion = "\$" . $nombre_campo . "='" . $valor . "';<br>";
    if($nombre_campo == 'pass'){
        echo 'ten cuidado con la informacion';
        echo $nombre_campo;
    }
 } 
?>