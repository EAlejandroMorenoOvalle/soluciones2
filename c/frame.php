<!DOCTYPE html>
<html>
<head>
<style>
body{
	font-family: Calibri;
}
.uu{
color:blue}

</style>
</head>
<body>
<?php 
$group = $_GET['group'];
$conn = new mysqli('localhost', 'root', '','test');
$sql = "select * from chat where txt like '%$group%'";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["txt"];
    }
} else {
    echo "Start Chatting $group";
}
$conn->close();

?>
</body>
</html>
