<?php 
ob_start();
session_start();
require_once '../../config.php'; 
if(!isset($_SESSION['logged_in'])){
    header('Location: ../../index.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SACEU</title>
        <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" type="text/css" rel="STYLESHEET">
        <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" type="text/css" rel="STYLESHEET">
        <link href="../../calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
        <script type="text/javascript" src="../../calendario_dw/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="../../calendario_dw/calendario_dw.js"></script>

        <!-- Alejandro-->

        <script type="text/javascript">
            $(document).ready(function() {

            });
        </script>
        <script type="text/javascript">
            jQuery.noConflict();
            var j = jQuery.noConflict();
            j(document).ready(function() {
                j(".campofecha").calendarioDW();
            })
        </script>
        <script language="javascript" src="../../js/jquery-1.3.min.js"></script>
        <script language="javascript" src="../../js/inser.js"></script>

        <script>
            window.addEventListener('load', () => {
                $('#mytable').DataTable({
                    "paging": false // false to disable pagination (or any other option)
                });
                $('.dataTables_length').addClass('bs-select');

            });
        </script>

        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/sb-admin.css" rel="stylesheet">
        <link href="../../css/plugins/morris.css" rel="stylesheet">
        <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
        <script src="../../js/funcionescover.js"></script>
        <link rel="shortcut icon" href="../../img/logo1.ico" />
        
        <link rel="stylesheet" href="../../css/modal.css"/>
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">   


      
    </head>

    <body>
        <div class = "popup-overlay" > 
            <div class = "popup-content" >
                <section class="popup-header">
                    <h3><strong>Selecciona una fecha</strong></h3>
                </section>
                
				<input type="text" name="fecha" id="fecha" content-editable="false" class="campofecha" size="12">

				<button id="datebutton" class="btn btn-success">Fijar Fecha</button>
                <div id="closeContainer">
				    <span class="lnr lnr-cross close" style="display: none"></span>  
                </div>
       	    </div>
        </div>

        

        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/maininstructor.php">SACEU - Sistema de Administración Campus Ejecutivos Unisana</a>
                </div>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>instructor</strong>
                                        </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> 0:00 PM</p>
                                            <p>No hay mensajes</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Leer todos los mensajes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                     <?php if($_SESSION['logged_in']) { ?>
                    <?php echo $_SESSION['name']; ?>
                    <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../../account3.php"><i class="fa fa-fw fa-user"></i> Mi cuenta</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Bandeja de Entrada</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                            </li>
                        </ul>
                        <?php } ?>
                    </li>
                </ul>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="/maininstructor.php"><i class="fa fa-fw fa-dashboard"></i> Menu</a>
                        </li>
                        <li class="active">
                            <a href="/php/Asistencia/asistencia.php"><i class="fa fa-fw fa-bar-chart-o"></i> Asistencia</a>
                        </li>
                        <li>
                            <a href="/php/Calificacion/calificacion.php"><i class="fa fa-fw fa-desktop"></i> Calificaciones</a>
                        </li>
                        <li>
                            <a href="/php/GastosOperativos/RepoCampus.php"><i class="fa fa-fw fa-table"></i> Generar Reporte</a>
                        </li>

                    </ul>
                </div>
                <!-- finish barra de /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Pase de asistencia
                        </h1>
                            <?php
                        include("../../conexion.php");
$consu = "select diplomados.nombrediplomado from diplomados WHERE diplomados.iddiplomados  = $_SESSION[dipSession]";

$nombre = $conexion->query($consu);

if($nombre->num_rows){

    while($row=$nombre->fetch_array()){

?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2>Diplomado de <?php echo "$row[nombrediplomado]"; }
                        }else{
                            echo 'No hay campus';

                        }

                         ?></h2>

                                        <ol class="breadcrumb">
                                            <li>
                                                <i class="fa fa-dashboard"></i> <a href="/../maininstructor.php">Pagina Principal</a>
                                            </li>
                                            <li class="active">
                                                <i class="fa fa-bar-chart-o"></i> Alumnos
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                   
                                    <?php
                                        /*ALEJANDRO*/

                                        $module = $_POST['modulos'];
                                        $_SESSION['mod'] = $module;
                                                        echo "<div id='mod' style ='display:none'>$module</div>";

                                        include("../../conexion.php");

                                    ?>
                                    

                                  
                                    <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ -->
                                    <?php               $consu = "select nombre from modulos WHERE idmodulos  = $module";

                            $cabeceraModulo = $conexion->query($consu);

                            if($cabeceraModulo->num_rows){

                                while($row=$cabeceraModulo->fetch_array()){

                            ?>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h3><?php echo "Modulo:     "."$row[nombre]"; }
                            }
                         ?></h3>

                                                <!-- <div class="table-responsive">-->
                                                <!-- id="calif" class="table table-bordered table-hover" -->
                                                <div class="table-responsive">
                                                    <!-- <form  method='post' action='../../Acciones/asis/insertarasistenciaAlejandro.php' target="request">-->

                                                   <!-- <label for="fecha">Ingresa Fecha</label>
                                                    <input type="text" name="fecha" id="fecha" content-editable="false" class="campofecha" size="12">
                                                    <input id="datebutton" class="btn btn-success" value="Escribir fecha">-->
                                                    <table id="asis" class="table table-bordered table-hover">

                                                        <thead>
                                                            <tr>
                                                                
                                                                    <th style='display:none'>Id Alumno</th>
                                                                    <th>Nombre</th>
                                                                    <th>Matricula</th>
                                                                    <th>Fecha </th>
                                                                    <th>Status</th>
                                                                    <th>Asistencia</th>
                                                                    <th>Inasistencia</th>

                                                                    

                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php include("../../vistas/asis/activosCampusdi.php"); ?>
                                                        </tbody>

                                                    </table>
                                                    
                                                    </div>
                                                    <div id="result"></div>
                                                    <button id="forButton" style="display: ; margin auto;" class="btn btn-success">Enviar</button>
                                                    
                                                   	<form action="asistenciaalumdiImprimirTabla.php" method="post">
                                                    <input type="hidden" name ="modulo" id="modulo" value="<?php echo $_SESSION['mod'] ?>"> 
                                                   	<input type="hidden" name="formFecha" id="formFecha" >
                                                    <input type="submit" id="printTable" value="Refrescar tabla" class="btn btn-success" style="display: none">
                                                    </form>
                                                    

                                                    <form action="asistenciaalumindi.php" method="post" id="redireccion">
                                                        <input type="hidden" name="dip" value="<?php echo $_SESSION['dipSession'] ?>">
                                                        <input type="hidden" name="campus" value="<?php echo $_SESSION['campuSession'] ?>">

                                                       <!-- <a onclick='$("#redireccion").submit()'>Asistencias de manera individual</a>-->
                                                    </form>
                                                    
                                                    <script type="text/javascript" >
														//var numOfRows;
														
                                                        $('#datebutton').on('click', () => {
                                                            if($("#fecha").val() != ""){
                                                                $(".popup-overlay").fadeOut('slow');
                                                                var dateToWritte = $('#fecha').val();
                                                                var dateFormated = dateToWritte.split("/");
                                                                if (dateFormated[1] < 10) {
                                                                    dateFormated[1] = '0' + dateFormated[1];
                                                                }
                                                                if (dateFormated[0] < 10) {
                                                                    dateFormated[0] = '0' + dateFormated[0];
                                                                }
                                                                $("#fecha").val(dateFormated[2] + '-' + dateFormated[1] + '-' + dateFormated[0]);
                                                                $("#asis tbody tr").each(function(index) {
                                                                    var idAlumno, nombreAlumno, matricula, fecha, status;
                                                                    $(this).children("td").each(function(index2) {
                                                                        switch (index2) {

                                                                            case 3:
                                                                                fecha = $(this).text(dateFormated[2] + '-' + dateFormated[1] + '-' + dateFormated[0]);
                                                                                break;
                                                                        }
                                                                    });
                                                                });
                                                                $("#formFecha").val($("#fecha").val());
                                                                
                                                            }else{
                                                                alert("Selecciona una fecha.");
                                                            }
                                                        }); //Alejandro

                                                        $('#asis tbody').on('click', '.radioAsis', function() {
                                                            let asis = $(this).closest('tr').find('td:eq(4)');
                                                            asis.html("Asistencia");
                                                            asis.css("background-color", "green");
                                                            asis.css("color", "white");
                                                        });
                                                        $('#asis tbody').on('click', '.radioInasis', function() {
                                                            let inasis = $(this).closest('tr').find('td:eq(4)');
                                                            inasis.html("Inasistencia");
                                                            inasis.css("background-color", "red");
                                                            inasis.css("color", "white");
                                                        });

                                                        $("#forButton").click(() => {
															 numOfRows = countRows();
															//$(".radioAsis").removeAttr("checked");
															//$(".radioInasis").removeAttr("checked");
                                                            let comprobeInsertion = comprobe();
                                                            if (comprobeInsertion == false) {
                                                                insertIn();
																$("#formFecha").html($("campofecha").text());
																$("#forButton").fadeOut('slow');
																$("#printTable").fadeIn('slow');
                                                                            
																
                                                            } else {
                                                                alert("Comprueba que todos los campos esten llenos");
                                                            }
															
															
															
															
                                                        });
														//CUENTA EL NÚMERO DE FILAS DE LA TABLA ■DEVUELVE EL NÚMERO EXACTO DE FILAS
														function countRows(){
															let numberOfRows =0;
																$("#asis tbody tr").each(function(index) {
																		numberOfRows++;
																});
															return numberOfRows;
														}
														function cleanTable(){
															
															
															$("#asis tbody tr").each(function(index) {
																$(this).children("td").each(function(index2) {
																	switch (index2) {
                                                                        case 4:
                                                                            
                                                                                $(this).html('');
																				$(this).css("background-color", "#fff");
                                                                            
                                                                            break;
																		
                                                                    }
																});
                                                                    
															});
															 $("#forButton").removeAttr('disabled');
															$(".popup-overlay").fadeIn('slow');
														}

                                                        function comprobe() {
                                                            let columnEmpty = false;

                                                            $("#asis tbody tr").each(function(index) {
                                                                var idAlumno, nombreAlumno, matricula, fecha, status;
                                                                $(this).children("td").each(function(index2) {
                                                                    switch (index2) {
																			

                                                                        case 4:
                                                                            if ($(this).text().length == 0) {
                                                                                columnEmpty = true;
                                                                            }
                                                                            break;
                                                                    }
                                                                });

                                                            });
                                                            return columnEmpty;
                                                        }

                                                        //Registros

                                                        function insertIn() {
															

                                                            var url = "";
                                                            var modulo = $("#mod").text();
															let numOfRowsCompared = 0;

                                                            $("#asis tbody tr").each(function(index) {
                                                                var idAlumno, nombreAlumno, matricula, fecha, status;
                                                                $(this).children("td").each(function(index2) {
																	
                                                                    switch (index2) {
                                                                        case 0:
                                                                            idAlumno = $(this).text();
                                                                            break;
                                                                        case 1:
                                                                            nombreAlumno = $(this).text();
                                                                            break;
                                                                        case 2:
                                                                            matricula = $(this).text();
                                                                            break;
                                                                        case 3:
                                                                            fecha = $(this).text();
                                                                            break;
                                                                        case 4:
                                                                            status = $(this).text();
                                                                            break;
																			
                                                                    }
																	
																	
																	
                                                                })
																//numOfRowsCompared+=1;
																
                                                                console.log(idAlumno + ' - ' + nombreAlumno + ' - ' + matricula + ' - ' + fecha + ' - ' + status + ' - ' + modulo);
																/*if(numOfRowsCompared ==  numOfRows){
																		cleanTable();
																		
																	   }*/
																
																

                                                                url = "insertarasistenciaN.php";
                                                                $.ajax({
                                                                    type: "post",
                                                                    url: url,
                                                                    data: {
                                                                        idAlumnoa: idAlumno,
                                                                        nombreAlumnoa: nombreAlumno,
                                                                        matriculaa: matricula,
                                                                        fechaa: fecha,
                                                                        statusa: status,
                                                                        moduloa: modulo
                                                                    },
                                                                    success: function(datos) {
                                                                        $("#forButton").val("Datos enviados");
                                                                        $("#forButton").prop('disabled', true);
																		
																		
																		
                                                                        
                                                                    }
                                                                });

                                                            });
                                                        }
                                                        

                                                       
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div id="resultado"></div>
					
                                        <script>
                                            $('#asis').DataTable({
                                                "paging": false,
                                                destroy: true,
                                                dom: 'Bfrtip',
                                                buttons: [
                                                    'copyHtml5',
                                                    'excelHtml5',
                                                    'csvHtml5',
                                                    'pdfHtml5'
                                                ]
                                            });
                                        </script>
                                        <script>
					

												  $(document).ready(function(){
													$('.datepicker').datepicker();
												  });
         
											
											
											$(".close, .popup").on("click", function(){
												/*$(".close, .popup-overlay").addClass("disabled");  
												$(".close, .popup-content").addClass("disabled");*/
												$(".popup-overlay").fadeOut('slow');
												
											});
            							</script>
                                        <script src="../../js/bootstrap.min.js"></script>
                                        <script src="../../js/plugins/morris/raphael.min.js"></script>
                                        <script src="../../js/plugins/morris/morris.min.js"></script>
                                        <script src="../../js/plugins/morris/morris-data.js"></script>
                                        <script src="../../js/plugins/flot/jquery.flot.js"></script>
                                        <script src="../../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
                                        <script src="../../js/plugins/flot/jquery.flot.resize.js"></script>
                                        <script src="../../js/plugins/flot/jquery.flot.pie.js"></script>
                                        <script src="../../js/plugins/flot/flot-data.js"></script>


    </body>

    </html>