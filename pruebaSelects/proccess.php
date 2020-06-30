<?php

$id = $_POST['check'];
<?php
        $sql = "SELECT * FROM alumnos where id = $id"; 
        $query = $connect -> prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ); 
        $cadena ='';
        if($query -> rowCount() > 0)   { 
            foreach($results as $result) { 
                
            $cadena .= '<option value = "'.$result -> id.'">'.$result -> nombre.'</option>';
                

            }
            echo $result -> id;
            //echo $cadena;
        }
    ?>

?>