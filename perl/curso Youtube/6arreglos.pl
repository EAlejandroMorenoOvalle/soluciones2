#!/usr/bin/perl
use 5.010;
use warnings;
use strict;

my @idiomas = ("Aleman", "Ruso", "Ingles");


say @idiomas;
say "\n";

foreach my $idioma (@idiomas){
    say  $idioma;
}
say "\n";

#PUSH AÑADIR AL FINAL
push @idiomas , 'Italiano';
#UNSHIFT AÑADIR AL PRINCIPIO
unshift @idiomas , 'Griego';

for(my $i = 0; $i < $#idiomas + 1; $i++){
    say @idiomas[$i];
}




