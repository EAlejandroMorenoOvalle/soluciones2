 #!/bin/perl/
    inicio;
    system(clear);
    @vector;
    for ( $i = 0; $i < 50; $i++ ) {
        print "Ingrese 50 Valores Cualquiera \n";
        $numero[$i] = <stdin>;
        $vector[$i] = $numero[$i];
    }
     
    for ( $i = 0; $i < 50; $i++ ) {
        print $numero[$i];
    }
     
    for ( $i = 0; $i < 50; $i++ ) {
        $suma = $suma + $numero[$i];
    }
    print "Los Números agregados son $i \n";
     
    $promedio = $suma / 5;
     
    print "EL Promedio de los Numeros son $promedio \n";
     
    print "Los numeros mayores que promedio son: \n";
     
    for ( $i = 0; $i < $promedio; $i++ ) {
        if ( $numero[$i] > $promedio ) {
            print "$numero[$i]\n";
        }
    }
     

