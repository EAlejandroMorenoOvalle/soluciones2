<?php


/*$connect = new PDO("mysql:host=localhost;dbname=php_consultapdo", "root", "");*/

// DB CREDENCIALES DE USUARIO.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','chat2_db');

// Ahora, establecemos la conexión.
try
{
// Ejecutamos las variables y aplicamos UTF8
$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}date_default_timezone_set("America/Mexico_City");
$sql = "SELECT TIME(time) as time  FROM chat_users";
$query = $connect -> prepare($sql);
$query -> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)   {
foreach($results as $result) {
   $fecha = $result -> time;

   echo $fecha."<br>";
   echo date("h:i:s");
/*
   $ts1 = strtotime(str_replace('/', '-', '02/01/2013 08:24'));
$ts2 = strtotime(str_replace('/', '-', '31/12/2012 13:46'));
$diff = abs($ts1 - $ts2) / 3600;
 
 
 
 https://stackoverflow.com/questions/16879373/calculate-difference-between-2-times-in-hours-in-php
 
 
 */
   }
 }

?>
