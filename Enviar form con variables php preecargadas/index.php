<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php 
     $dato ="soy un dato de PHP";
    ?>
    
    <form action="datos.php" method="get">
        <input type="hidden" value=" <?php $dato?>">
        <input type="submit" name="dato" value="Enviar">
    </form>
    
</body>
</html>