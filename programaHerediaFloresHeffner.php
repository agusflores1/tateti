<?php

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
/*Flores Montes Ailen Agustina - FAI-3547 -Tecnicatura Desarrollo Web - ailen.flores@est.fi.uncoma.ed.ar - agusflores1 */
/*Jorge Emanuel Heredia - FAI 3063 - Tecnicatura Desarrollo Web - jorge.heredia@est.fi.edu.ar - EmanuelHeredia3063*/
/*Veronica Emilce Heffner - FAI-2319 - Tecnicatura Universitaria en Desarrollo web - veronica.heffner@est.fi.uncoma.edu.ar - Emiffner*/




/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


// Punto 4
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
/** Punto 3
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero; }
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
  $opcion=trim(fgets(STDIN));
  while ($opcion>7 || $opcion<1){
    echo "ERROR INGRESE UNA OPCION VALIDA: ";
    $opcion=trim(fgets(STDIN));
  }
  return $opcion;
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

/** Punto 5:
 * Implementar una función "agregarJuego" cuya entrada en la coleccion de juegos y un juego, y la función retorna la 
 * colección modificada al agregarse el nuevo juego
 */
function agregarJuego ($arregloColeccionDeJuegos){

  return $arregloColeccionDeJuegos;
}
/** Punto 6 (Emi):
 * Implementar una función que dada una colección de juegos y el nombre de un jugador, retorna el indice del primer juego
 * ganado por dicho jugador. Si el jugador no ganó ningún juego, la función debe retornar -1
 */
function primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador){
  $ganoJuego=-1;
  for ($i=0; $i<count($arregloColeccionDeJuegos) ; $i++) { 
    if ($nombreJugador[$i]["jugadorCruz"]==$nombreJugador || $nombreJugador[$i]["jugadorCirculo"]==$nombreJugador){
      $ganoJuego=$i;
      $i=count($arregloColeccionDeJuegos)+1;
    }
  }
  return $ganoJuego;
}
/** Punto 7 (Emi):
 * Implementar una función que dada la colección de juegos y el nombre de un jugador, retorne el resumen
 * del jugador
 */
function resumenJugador($arregloColeccionDeJuegos,$nombreJugador){
  //Inicializamos el arreglo que almacenará el resumen del jugador buscado
  $arregloResumenJugador=[];
  $arregloResumenJugador=["nombre" => $nombreJugador,
                          "juegosGanados" => 0,
                          "juegosPerdidos" => 0,
                          "juegosEmpatados" => 0,
                          "puntosAcumulados" => 0];
//Recorremos la coleccion de juegos en busca del jugador buscado
  for ($i=0; $i<count($arregloColeccionDeJuegos); $i++) { 
//Busca y encuentra el jugador
    if ($arregloColeccionDeJuegos[$i]["jugadorCruz"]==$nombreJugador || $arregloColeccionDeJuegos[$i]["jugadorCirculo"]==$nombreJugador){
//Si el jugador fue Cruz, almacena sus datos
      if ($arregloColeccionDeJuegos[$i]["jugadorCruz"]==$nombreJugador){
        $arregloResumenJugador["puntosAcumulados"]=$arregloResumenJugador["puntosAcumulados"]+$arregloColeccionDeJuegos[$i]["puntosCruz"];
//Si el jugador fue Circulo, almacena sus datos
      }else{
        $arregloResumenJugador["puntosAcumulados"]=$arregloResumenJugador["puntosAcumulados"]+$arregloColeccionDeJuegos[$i]["puntosCirculo"];
      }
    }
  }
  return $arregloResumenJugador;
}
/** Punto 8 (Agus):
 * funcion que valida el simbolo ingresado y lo retorna 
 * @return $simbolo
 */
function simboloValido(){
  do{
  echo"Ingrese simbolo: (X/0)";
  $simbolo=trim(fgets(STDIN));
  $simbolo=strtoupper($simbolo);
  }while($simbolo=!"X"||$simbolo!="O");
  return $simbolo;
}
/** Punto 9 (Emi):
 * Implementar una función que dada una colección de juegos, retorne la cantidad de juegos ganados
 * sin importar si es X o O
 */
function juegosGanados(){
  $cantJuegosGanados=0;
  return $cantJuegosGanados;
}
/** Punto 10 (Emi):
 * Implementar una función que dada una colección de juegos y un símbolo, retorne la cantidad de
 * juegos ganados por el símbolo ingresado por parámetros
 * @param array $coleccionDeJuegos
 * @param string $simbolo
 * @return int cantidad de juegos ganados por el simbolo que ingresa por parámetro
 */
function juegosGanadosSimbolo($arregloColeccionDeJuegos,$simbolo){
  $cantJuegosGanadosSimbolo=0;
  for ($i=0; $i<count($arregloColeccionDeJuegos); $i++) { 
    if ($simbolo=="X"){
      $cantJuegosGanadosSimbolo=$cantJuegosGanadosSimbolo+;
    }else{

    }
  }
  return $cantJuegosGanadosSimbolo;
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
break;
case 2: 
  echo "Ingrese un numero de partida: ";
  $numeroPartida=trim(fgets(STDIN)) ;
  datoPartida($arregloColeccionDeJuegos,$numeroPartida);
  break 2;

case 3:
  
  break 3;
} } while ($opcionElegida<>7) ;
