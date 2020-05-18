<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php 
   $usr = "mario";
   ?>
    
    <script type="text/x-javascript">
    function showusr(){
        var usuario = "<?php echo $usr ?>"
        alert(usuario);
    }
        window.addEventListener('load', showusr);
    
    </script>
</body>
</html>