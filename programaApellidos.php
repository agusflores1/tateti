<?php

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
/*Flores Montes Ailen Agustina - FAI-3547 -Tecnicatura Desarrollo Web - ailen.flores@est.fi.uncoma.ed.ar - agusflores1 */
/*Jorge Emanuel Heredia - FAI 3063 - Tecnicatura Desarrollo Web - jorge.heredia@est.fi.edu.ar - EmanuelHeredia3063*/




/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


//punto4
/**Funcion que recibe un arreglo y un numero de partida y muestra en pantalla el resultado
 * @param $arreglo array
 * @param $numeroJuego1 int
 */
function datoPartida($arreglo,$numeroJuego1)
{
  if ($numeroJuego1>=0 && $numeroJuego1<count($arreglo))
  {
    echo "Juego TATETI: ".$numeroJuego1 . "\nJugador X: ".$arreglo[$numeroJuego1]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroJuego1]["puntosCruz"]." Puntos"."\nJugador O: ".$arreglo[$numeroJuego1]["jugadorCirculo"]."obtuvo".$arreglo[$numeroJuego1]["puntosCirculo"]."Puntos";
    //print_r( $arreglo[$numeroJuego1] );
  }
}
 
/**
 *FUNCION UTILIZADA AL FINAL DE UNA PARTIDA
 *  Muestra en pantalla el resultado del juego
 * @param array $juego
 */
function imprimirResultadoo($juego)
{
    echo "**********************\n";
    if ($juego["puntosCruz"] > $juego["puntosCirculo"]) {
        echo $juego["jugadorCruz"] . " GANASTE " . $juego["puntosCruz"] . " puntos!!!!!\n";
    } elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        echo $juego["jugadorCirculo"] . " GANASTE " . $juego["puntosCirculo"] . " puntos!!!!!\n";
    } else {
        echo "EMPATE ENTRE " . $juego["jugadorCruz"] . " y " . $juego["jugadorCirculo"] . ". " . $juego["puntosCruz"] . "  puntos para cada uno!!!!!\n";
    }
    echo "**********************\n"; }
 
/** punto 3
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int
 *//*
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero; }*/
 
/**Funcion que muestra en pantalla el menu de opciones y retorna una opcion valida
 @return int */
function seleccionarOpcion ()
{
echo "Menu de opciones:
    1) Jugar al tateti
    2) Mostrar un juego
    3) Mostrar el primer juego ganador
    4) Mostrar el primer juego ganador
    5) Mostrar resumen del jugador
    6) Mostrar listado de juegos ordenados por jugador O
    7) Salir \n";
$opcion = trim(fgets(STDIN)) ;
if ($opcion>7)
    {
     echo "ERROR INGRESE UNA OPCION VALIDA \n"  ;
    } return $opcion ;
}

/*Funcion que precarga 10 juegos al iniciar el programa 
@return array 
*/

function cargarJuegos () 
{
$arregloColeccionDeJuegos = [];
$arregloColeccionDeJuegos [0] = [ "jugadorCruz" => "EMA",
                                  "jugadorCirculo" => "BAUTY",
                                  "puntosCruz" => 0 ,
                                  "puntosCirculo" => 6 ];  
$arregloColeccionDeJuegos [1] = [ "jugadorCruz" => "JULY",
                                  "jugadorCirculo" => "AGUS",
                                  "puntosCruz" => 1 ,
                                  "puntosCirculo" => 1 ];
$arregloColeccionDeJuegos [2] = [ "jugadorCruz" => "DANI",
                                  "jugadorCirculo" => "CECI",
                                  "puntosCruz" => 3 ,
                                  "puntosCirculo" => 0 ];  
$arregloColeccionDeJuegos [3] = [ "jugadorCruz" => "GABY",
                                  "jugadorCirculo" => "EMA",
                                  "puntosCruz" => 4,
                                  "puntosCirculo" => 0 ]; 
$arregloColeccionDeJuegos [4] = [ "jugadorCruz" => "JULY",
                                  "jugadorCirculo" => "DANI",
                                  "puntosCruz" => 1 ,
                                  "puntosCirculo" => 1 ]; 
$arregloColeccionDeJuegos [5] = [ "jugadorCruz" => "DANI",
                                  "jugadorCirculo" => "JULY",
                                  "puntosCruz" => 4 ,
                                  "puntosCirculo" => 0 ]; 
$arregloColeccionDeJuegos [6] = [ "jugadorCruz" => "LUCE",
                                  "jugadorCirculo" => "GABY",
                                  "puntosCruz" => 3 ,
                                  "puntosCirculo" => 0 ]; 
$arregloColeccionDeJuegos [7] = [ "jugadorCruz" => "BAUTY",
                                  "jugadorCirculo" => "AGUS",
                                  "puntosCruz" => 0 ,
                                  "puntosCirculo" => 2 ]; 
$arregloColeccionDeJuegos [8] = [ "jugadorCruz" => "CECI",
                                  "jugadorCirculo" => "SUSANA",
                                  "puntosCruz" => 1,
                                  "puntosCirculo" => 1 ]; 
$arregloColeccionDeJuegos [9] = [ "jugadorCruz" => "GERMAN",
                                  "jugadorCirculo" => "MIGUEL",
                                  "puntosCruz" => 0 ,
                                  "puntosCirculo" => 4 ];                                 

return $arregloColeccionDeJuegos ;  

}




/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//PARTE EMANUEL
cargarJuegos() ;
print_r($arregloColeccionDeJuegos) ;



//PARTE AGUS
 //INICIAMOS PROGRAMA
do {
  $opcionElegida=seleccionarOpcion() ;
switch($opcionElegida)
{case 1:
  include_once("tateti.php");
  $juego=jugar();
  imprimirResultado($juego);
  $ArregloColeccionDeJuegos[]=$juego;
 
  //print_r($ColeccionDeJuegos) ;
break ;
 case 2:
  echo "Ingrese un numero de partida: ";
  $numeroPartida=trim(fgets(STDIN)) ;
  datoPartida($arregloColeccionDeJuegos,$numeroPartida);
  break 2 ;
 
} } while ($opcionElegida<>7) ;
 
