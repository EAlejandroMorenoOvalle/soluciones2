<?php
// Creamos un array
            

$mi_pasa_array=array("Spiderman" =>354, "Shrek2" =>462, "CatWoman" => 286);
$compactada=serialize($mi_pasa_array);
            

$compactada=urlencode($compactada);
            

            

$ch=curl_init("localhost:8080?parametroUno=$compactada");


curl_exec($ch);
?>
                        
