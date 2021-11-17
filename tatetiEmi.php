php <?
/** Esta función responde a la opción uno en el Ta Te Ti 
 * 
 * return array
 */
// esto tiene que ir en el programa principal.
//Array que almacena los datos del juego y contador de coleccion de juegos
$coleccionJuegos=[];
$nroDeColeccion=0;
/**
 * 
 */

//function jugarTateti($coleccionJuegos,$nroDeColeccion){

//Puntos que acumulan los jugadores en la partida
$puntosCruz=0;
$puntosCirculo=0;
//La funcion de esta variable es:
$continuar=1;
//Array del TaTeTi
$taTeTi[0]=[" "," "," "];
$taTeTi[1]=[" "," "," "];
$taTeTi[2]=[" "," "," "];

echo "Ingrese el nombre del jugador nro 1: ";
$jugadorCruz=trim(fgets(STDIN));
echo "Ingrese el nombre del jugador nro 2: ";
$jugadorCirculo=trim(fgets(STDIN));
graficoTateti($taTeTi);

while ($continuar==1){
    $i=0;
    do{ 
        if ($i%2==0){
            do{
            echo "".$jugadorCruz." elija fila: ";
            $fila=numeroValido();
            echo "".$jugadorCruz." elija columna: ";
            $columna=numeroValido();
            }while(casillaLibre($taTeTi,$fila,$columna)==false);
            $taTeTi[$fila][$columna]="X";
        } else{
            do{
            echo "".$jugadorCirculo." elija fila: ";
            $fila=numeroValido();
            echo "".$jugadorCirculo." elija columna: ";
            $columna=numeroValido();
            }while(casillaLibre($taTeTi,$fila,$columna)==false);
            $taTeTi[$fila][$columna]="O";
        }
        graficoTateti($taTeTi);
        if (($i>=4)&&(ganarFila($taTeTi)==true||ganarColumna($taTeTi)==true||ganarDiagonales($taTeTi)==true)){
            $ganador=$i;
            $i=9;
        }  
        $i++;
    }while ($i < 9);
if($ganador%2==0){
    echo "".$jugadorCruz." ganaste la partida!";
    $puntosCruz=$puntosCruz+1;
}
if ($ganador%2==1){
    echo "".$jugadorCirculo
    ." ganaste la partida!";
    $puntosCirculo=$puntosCirculo+1;
} else {
    echo "".$jugadorCirculo." y ".$jugadorCruz.", ustedes empataron!";
    $puntosCruz=$puntosCruz+1;
    $puntosCirculo=$puntosCirculo+1;
}
// vaciamos el tateti para que se pueda jugar otra partida.
$taTeTi[0]=[" "," "," "];
$taTeTi[1]=[" "," "," "];
$taTeTi[2]=[" "," "," "];
echo "Si desea volver a jugar, escriba 1, de lo contrario, escriba 0: ";
$continuar=trim(fgets(STDIN));
$coleccionJuegos[$nroDeColeccion]=[$jugadorCruz,$jugadorCirculo,$puntosCruz,$puntosCirculo];
}
/*Esto es para que la proxima vez que ingresemos en la opcion de jugar TaTeTi
* los datos de la nueva partida sean almacenados en una nueva coleccion de juegos
*/
$nroDeColeccion=$nroDeColeccion+1;
//}
/**
 * 
 */
function graficoTateti($taTeTi){
    $linea="  -------------------\n";
    echo "     0      1      2\n";
    echo "".$linea;
    echo "0 |  ".$taTeTi[0][0]."  |   ".$taTeTi[0][1]." |  ".$taTeTi[0][2]."  | \n";
    echo "".$linea;
    echo "1 |  ".$taTeTi[1][0]."  |  ".$taTeTi[1][1]." |  ".$taTeTi[1][2]."  |\n";
    echo "".$linea;
    echo "2 |  ".$taTeTi[2][0]."  |  ".$taTeTi[2][1]." |  ".$taTeTi[2][2]."  |\n";
    echo "".$linea;
}
/**
 * 
 */
function ganarFila ($taTeTi){
    //inicializamos la variable
    $ganar=false;
    if ($taTeTi[0][0]==$taTeTi[0][1]&&$taTeTi[0][1]==$taTeTi[0][2]){
        $ganar=true;
    }
    if ($taTeTi[1][0]==$taTeTi[1][1]&&$taTeTi[1][1]==$taTeTi[1][2]){
        $ganar=true;
    }
    if ($taTeTi[2][0]==$taTeTi[2][1]&&$taTeTi[2][1]==$taTeTi[2][2]){
        $ganar=true;
    }
    return $ganar;
}
/**
 * 
 */
function ganarColumna($taTeTi){
    $ganar=false;
    if ($taTeTi[0][0]==$taTeTi[1][0]&&$taTeTi[1][0]==$taTeTi[2][0]){
        $ganar=true;
    }
    if ($taTeTi[0][1]==$taTeTi[1][1]&&$taTeTi[1][1]==$taTeTi[2][1]){
    $ganar=true;
    }
    if ($taTeTi[0][2]==$taTeTi[1][2]&&$taTeTi[1][2]==$taTeTi[2][2]){
        $ganar=true;
    }
    return $ganar;
}
/**
 * 
 */
function ganarDiagonales($taTeTi){
    $ganar=false;
    if ($taTeTi[0][0]==$taTeTi[1][1]&&$taTeTi[1][1]==$taTeTi[2][2]){
        $ganar=true;
    }
    if ($taTeTi[0][2]==$taTeTi[1][1]&&$taTeTi[1][1]==$taTeTi[2][0]){
        $ganar=true;
    }
    return $ganar;
}
/**
 * 
 */
function numeroValido(){
    $numeroValidar=trim(fgets(STDIN));
    while ($numeroValidar<0 || $numeroValidar>2){
        echo "El número ingresado no es válido, ingrese un número correcto: ";
        $numeroValidar=trim(fgets(STDIN));
    }
    return $numeroValidar;
}
/**
 * 
 */
function casillaLibre($taTeTi,$fila,$columna){
    if ($taTeTi[$fila][$columna]==" "){
        $libre=true;
    }else{
        echo "Esa casilla está ocupada, elija otra\n";
        $libre=false;
    }
    return $libre;
}