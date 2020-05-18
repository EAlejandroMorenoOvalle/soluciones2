<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
   
   <form action="recivirinfo.php" type ="get" id="formu">
       <input type="hidden" id="ih" name="escondida">
   </form>
   
   <input type="text" id="vambiarvalor">
   <button id="btn">Cambiar</button>
     
    <script type="text/javascript">
         
       $(document).ready(()=>{
           $("#btn").click(()=>{
               $("#ih").val($("#vambiarvalor").val())  ;
               $("#formu").submit();
               console.log($("#vambiarvalor").val());
               console.log("click");
           });
       });
    </script>
    
</body>
</html>