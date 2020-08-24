#!/usr/bin/perl
use 5.010;
use warnings;
use strict;

my @numeros = (1, 3, 9, 11);

my $mayor = $numeros[0];

for(my $i = 0; $i < $#numeros+1; $i++){
    if($numeros[$i] > $mayor){
        $mayor = $numeros[$i];
    }
}

say $mayor;
say "\n";

my $menor = $mayor; 

for(my $i = 0; $i < $#numeros+1; $i++){
    if($numeros[$i] < $menor){
        $menor = $numeros[$i];
    }
}
say $menor;