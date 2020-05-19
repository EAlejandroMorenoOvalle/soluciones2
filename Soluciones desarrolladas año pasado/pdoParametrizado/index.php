<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $sql = "insert into tbl_personal (id, nombres, edad, estado, fregis) values (:id, :nombres, :edad, :estado, :fregis)"; 
    $sentencia = $connect -> prepare($sql); 
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':edad', $edad);
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':fregis', $fregis);

    $id = 30;
    $nombres = "Eduardo Alejandro Moreno Ovalle";
    $edad = 23;
    $estado = "soltero";
    $fregis= "2019-08-20";

    $sentencia -> execute(); 
    /*$results = $query -> fetchAll(PDO::FETCH_OBJ); 
    
    if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 
    echo "<tr>
    <td>".$result -> nombres."</td>
    <td>".$result -> edad."</td>
    <td>".$result -> estado."</td>
    <td>".$result -> fregis."</td>
    </tr>";
    
       }
     }*/
    
    ?>
</body>
</html>