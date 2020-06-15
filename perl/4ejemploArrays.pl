  #!/usr/bin/perl

  #Declaramos la variable primer_array como un array
  my @primer_array;

  #asignamos unos cuatro valores al array
  @primer_array=(1,"dos",3,"cuatro");

  #Añadimos un quinto de forma individual
  $primer_array[4]=5.5;

  #Mostramos el tercer elemento del array
  print "El tercero es= ".$primer_array[3]." \n";
  print "El array completo es: \n";
 for (my $i=0; $i <= $#primer_array; $i++) {
 	print $primer_array[$i]. "\n";
 }

 print "El array contiene $#primer_array";

