#!/usr/bin/perl

  #asignamos unos cuatro valores al array
  @matriz=(1,"dos",3,"cuatro");

  #Añadimos con Push
  push(@matriz, 5, 6, "siete");

  #Mostramos el último elemento
  print "El último es ". $matriz[$#matriz]."\n";
  #El último es siete


  #sacamos con Pop
  $uno=pop(@matriz);
 
  print "He sacado $uno\n";
  #He sacado siete

  #Añadimos con unshift
  unshift(@matriz, "cero", -1 );

  #Mostramos el primer elemento
  print "El primero es ". $matriz[0]."\n";

  #sacamos con shift
  $uno=shift(@matriz);
 
  print "He sacado $uno\n";

  print "La matriz tiene ".$#matriz." elementos\n";
