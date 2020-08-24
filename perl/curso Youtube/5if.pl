#!/usr/bin/perl
use 5.010;
use warnings;
use strict;

my $booleana = 0;
#my $booleana = undef;

my $tarea = 10;

if( $tarea){
    say "tienes 10 \n";
}else{
    say "reprobaste\n";
}

my $edad= 50;
my $mayorDeEdad = 0;
if($edad >= 18){
    say "Eres mayor de edad\n";
    $mayorDeEdad = 1;
}else{
    say "No eres menor de edad\n";
}

if($mayorDeEdad){
    say "Saca tu ID";
}





