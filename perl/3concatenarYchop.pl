#!/usr/bin/perl
 
  #Asigno valores a variables
  my $cad1="Hola";
  my $cad2="Mundo";
  my $cad3= $cad1." ".$cad2;

  #Metemos una nueva línea y un caracter raro en $cad3
  $cad3=$cad3."\n=";

  #Y le quitamos el caracter raro
  chop($cad3);

  #Escribimos en pantalla
  print $cad3;
