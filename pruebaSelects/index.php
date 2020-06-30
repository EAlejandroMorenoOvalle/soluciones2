<?php
include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">

</head>
<body>
    <select id="segundo"></select>
    <select name="" id="myselect">
        <?php
        $sql = "SELECT * FROM salon"; 
        $query = $connect -> prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ); 

        if($query -> rowCount() > 0)   { 
            foreach($results as $result) { 
                echo '
                <option value = "'.$result -> id.'">'.$result -> nombre.'</option>
                ';

            }
        }
    ?>
    </select>

        <script type="text/javascript"> 
            $( "#myselect" ).change(function() {
                var check = $("#myselect").val();
                alert(check);
                $.ajax({
            type: 'post',
            url: "proccess.php",
            data: {check: check 
              },
        
            success: function(data){
                /*
                * Se ejecuta cuando termina la petición y esta ha sido
                * correcta
                * */
                //$("#respuesta").html(data);
               // $("#segundo").append(data);
                console.log(data);
            }
        });
        // Nos permite cancelar el envio del formulario
        return false;
    });

        
        </script>

    
</body>
</html>