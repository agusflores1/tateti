<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/








/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/

//PARTE AGUS

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
    echo "**********************\n";
}
//funciones
 
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
    return $numero;
}*/
 
/**
 *Funcion que muestra en pantalla el menu de opciones y retorna una opcion valida
 @return int */
function seleccionarOpcion ()
{
echo "Menu de opciones:
\n 1)Jugar al tateti
\n 2)Mostrar un juego
\n 3) Mostrar el primer juego ganador
\n4)Mostrar el primer juego ganador
\n5)Mostrar resumen del jugador
\n6) Mostrar listado de juegos ordenados por jugador O
\n7)Salir \n";
$opcion = trim(fgets(STDIN)) ;
if ($opcion>7)
    {
     echo "ERROR INGRESE UNA OPCION VALIDA \n"  ;
    } return $opcion ;
}
 
 
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
 