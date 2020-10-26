<?php
	if ( $_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['session_i'] == 'yes') {
		forma();
	}
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['llena_tabla'] == 'yes') {
		llena_tabla();
	}
	function header_html(){
		echo '<!DOCTYPE html>
				<html>
				<head>
					<title>Pruebas</title>
					<script src= "https://code.jquery.com/jquery-3.5.1.min.js"></script>    
					<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
					<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
				</head> 
				<body>
				<h1>Bienvenido</h1>';
		}
	function forma(){
		header_html();
		echo  <<<html_out
			<script>
				$(document).ready(function(){
					$.ajax({
						type: 'post',
						url: "index.php",
						data: {llena_tabla: 'yes'},
						async: false,
						success: function(data){
							Swal.fire({
								title: 'Success!',
								html: data,
								icon: 'success',
								confirmButtonText: 'Cool'
						});
						        $("body").append(data);	
							//$('#mydatatable').DataTable();
						},
						error: function(data){
						},complete:function(data){
							$('#mydatatable').DataTable();

						}
					});
				});
			</script>

html_out;
	}
	function llena_tabla(){
			$html_out ='
				<table id = "mydatatable" style="width:100%">
				  	<theader>
						<tr>
				  		      <th>Firstname</th>
				  		      <th>Lastname</th>
				  		      <th>Age</th>
						</tr>
					</theader>
					<tbody>
				  	<tr>
				  	      <td>Jill</td>
				  	      <td>Smith</td>
				  	      <td>50</td>
				  	</tr>
				  	<tr>
				  	      <td>Eve</td>
				  	      <td>Jackson</td>
				  	      <td>94</td>
					</tr>
					</tbody>
				</table> ';
		echo $html_out;
	}
?>
