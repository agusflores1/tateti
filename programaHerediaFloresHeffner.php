<?php

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/*Flores Montes Ailen Agustina - FAI-3547 -Tecnicatura Desarrollo Web - ailen.flores@est.fi.uncoma.ed.ar - agusflores1 */
/*Jorge Emanuel Heredia - FAI 3063 - Tecnicatura Desarrollo Web - jorge.heredia@est.fi.edu.ar - EmanuelHeredia3063*/
/*Veronica Emilce Heffner - FAI-2319 - Tecnicatura Universitaria en Desarrollo web - veronica.heffner@est.fi.uncoma.edu.ar - Emiffner*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/** Punto 4 (Agus):
 * Funcion que recibe un arreglo y un numero de partida y muestra en pantalla el resultado
 * @param $arreglo array
 * @param $numeroJuego1 int
 */
function datoPartida($arreglo,$numeroJuego1){
    if ($numeroJuego1>=1 && $numeroJuego1<count($arreglo))
    {  
      $numeroJuego1 = $numeroJuego1 - 1 ; // le resto 1 al numero ingreaso por el usuario porque el indice arranca en 0
      echo "***************************************\n";
      echo "Juego TATETI: ".$numeroJuego1 + 1 . "\nJugador X: ".$arreglo[$numeroJuego1]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroJuego1]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroJuego1]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroJuego1]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";
      //print_r( $arreglo[$numeroJuego1] );
    }
    else 
    {
    echo "ERROR el numero de partida ingresado no existe " ;
    }
}

/** Punto 3 (Agus):
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int
 */
/*Esta funcion se puede usar desde el archivo tateti 
function solicitarNumeroEntre($min, $max){ 
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}
*/

/** punto 2 Funcion que muestra en pantalla el menu de opciones y retorna una opcion valida
* @return int
*/
function seleccionarOpcion (){
  
  //Int $opcion

  echo "Menu de opciones:
    1) Jugar al tateti
    2) Mostrar un juego
    3) Mostrar el primer juego ganador
    4) Mostrar porcentaje de juegos ganados
    5) Mostrar resumen del jugador
    6) Mostrar listado de juegos ordenados por jugador O
    7) Salir \n";
  echo "Seleccione una Opcion del Menu: " ;
  $opcion=trim(fgets(STDIN));
  while ($opcion>7 || $opcion<1){
    echo "ERROR Ingrese una opcion valida: ";
    $opcion=trim(fgets(STDIN));
  }
  return $opcion;
  }

/** Punto 1 (Emanuel):
 * Funcion que precarga 10 juegos al iniciar el programa  
 * @return array 
 */
function cargarJuegos () {

  //array $arregloColeccionDeJuegos

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

  return $arregloColeccionDeJuegos;
}
/** Punto 5 (Emanuel):
 * Función cuya entrada en la coleccion de juegos y un juego, y la función retorna la 
 * colección modificada al agregarse el nuevo juego
 * @param array $arregloColeccionDeJuegos
 * @param int @nuevoJuego
 * @return array arreglo modificado con el juego nuevo
 */
function agregarJuego ($arregloColeccionJuegos , $nuevoJuego ){
  //Queda completar con el código hecho por Emanuel
  //Int $n

  $n = count ($arregloColeccionJuegos) ;
  $coleccionJuegos [$n] = $nuevoJuego ;
  return $coleccionJuegos ;
  
}
/** Punto 6 (Emi):
 * Función que dada una colección de juegos y el nombre de un jugador, retorna el indice del primer juego
 * ganado por dicho jugador. Si el jugador no ganó ningún juego, la función debe retornar -1
 * @param array $arregloColeccionDeJuegos
 * @param string $nombreJugador
 * @return int retorna indice para ubicar el primer juego ganado por el jugador, si nunca gano, retorna -1
 */
function primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador)
{
  $ganoJuego=-1;
  for ($i=0; $i<count($arregloColeccionDeJuegos) ; $i++) 
    { 
    if ($arregloColeccionDeJuegos[$i]["jugadorCruz"]==$nombreJugador || $arregloColeccionDeJuegos[$i]["jugadorCirculo"]==$nombreJugador)
    {
      $ganoJuego=$i;
      $i=count($arregloColeccionDeJuegos)+1;
    }
    }
  return $ganoJuego;
}

/** Punto 7 (Emi):
 * Función que dada la colección de juegos y el nombre de un jugador, 
 * retorne el resumen del jugador
 * @param array $arregloColeccionDeJuegos
 * @param string $nombreJugador
 * @return array arreglo con un resumen del jugador que ingresa por parámetro
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
      //Si gano, agrega +1 en "juegosGanados"       
        if ($arregloColeccionDeJuegos[$i]["puntosCruz"]>$arregloColeccionDeJuegos[$i]["puntosCirculo"]){
          $arregloResumenJugador["juegosGanados"]=$arregloResumenJugador["juegosGanados"]+1;
      //Si perdio, agrega +1 en "juegosPerdidos"
        } if ($arregloColeccionDeJuegos[$i]["puntosCruz"]<$arregloColeccionDeJuegos[$i]["puntosCirculo"]){
            $arregloResumenJugador["juegosPerdidos"]=$arregloResumenJugador["juegosPerdidos"]+1;
      //Si empato, agrega +1 en "juegosEmpatados"
        }else{
          $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;
        }
    //Si el jugador fue Circulo, almacena sus datos
      }else{
        $arregloResumenJugador["puntosAcumulados"]=$arregloResumenJugador["puntosAcumulados"]+$arregloColeccionDeJuegos[$i]["puntosCirculo"];
      //Si gano, agrega +1 en "juegosGanados"       
        if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]>$arregloColeccionDeJuegos[$i]["puntosCruz"]){
          $arregloResumenJugador["juegosGanados"]=$arregloResumenJugador["juegosGanados"]+1;
      //Si perdio, agrega +1 en "juegosPerdidos"
        } if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]<$arregloColeccionDeJuegos[$i]["puntosCruz"]){
              $arregloResumenJugador["juegosPerdidos"]=$arregloResumenJugador["juegosPerdidos"]+1;
      //Si empato, agrega +1 en "juegosEmpatados"
            }else{
              $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;
      }
    }
  }
  return $arregloResumenJugador;
  }
}
/** Punto 8 (Agus):
 * funcion que valida el simbolo ingresado y lo retorna 
 * @return string $simbolo en mayusculas
 */
function simboloValido(){
  //int $salida
  $salida = 0 ;

  do{
    echo"Seleccione un simbolo (X/O): ";
    $simbolo=strtoupper (trim(fgets(STDIN)));
    if ($simbolo == "X" || $simbolo == "O")
    {
      $salida = 1 ;
    } else {
        echo "Error el simbolo seleccionado no es valido \n" ;
    }
  }while($salida != 1);
  return $simbolo;
  
}
/** Punto 9 (Emi):
 * Implementar una función que dada una colección de juegos, retorne la cantidad de juegos ganados
 * sin importar si es X o O
 * @param array $arregloColeccionDeJuegos
 * @return int retorna la cantidad de juegos que se ganaron en total
 */
function juegosGanados($arregloColeccionDeJuegos){
  
  $cantJuegosGanados = 0;
  
  for ($i=0 ; $i<count($arregloColeccionDeJuegos) ; $i++) { 
    if (($arregloColeccionDeJuegos[$i]["puntosCruz"] + $arregloColeccionDeJuegos[$i]["puntosCirculo"]) > 2 )
    {
      
      $cantJuegosGanados = $cantJuegosGanados +1;
    }
  return $cantJuegosGanados;
  }
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
  //Recorre el arreglo
  for ($i=0; $i<count($arregloColeccionDeJuegos); $i++) { 
    //Si el simbolo es X y puntosCruz>puntosCirculo, agrega +1 a cantJuegosGanadosSimbolo
    if ($simbolo=="X" && $arregloColeccionDeJuegos[$i]["puntosCruz"]>$arregloColeccionDeJuegos[$i]["puntosCirculo"]){
      $cantJuegosGanadosSimbolo=$cantJuegosGanadosSimbolo+1;
    }
    //Si el simbolo es O y puntosCirculo>puntosCruz, agrega +1 a cantJuegosGanadosSimbolo
    if ($simbolo=="O" && $arregloColeccionDeJuegos[$i]["puntosCirculo"]>$arregloColeccionDeJuegos[$i]["puntosCruz"]){
      $cantJuegosGanadosSimbolo=$cantJuegosGanadosSimbolo+1;
    }
  }
  return $cantJuegosGanadosSimbolo;
}
/** Punto 11:
 * Función sin retorno que dada una colección de juegos
 * muestre la colección de juegos ordenado por el nombre del jugador cuyo símbolo es O
 * @param array $coleccionDeJuegos
 */
function ordenarColeccionDeJuegos($coleccionDeJuegos){

  ksort($coleccionDeJuegos);
  foreach ($coleccionDeJuegos as $indice => $elemento ){

    echo $indice . " = " . $elemento ;
  }
}




/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

/**array $arregloColeccionDeJuegos , $juego , $primerGanador
int $opcionElegida , $numeroPartida , $numeroPrimerPartida , $totalGanados , $ganadosElegido
string $nombreJugador , $simboloElegido , $nomJugador
float $porcentaje
*/

//Inicialización de variables:

$arregloColeccionDeJuegos = [];

//Proceso:

//PARTE EMANUEL
$arregloColeccionDeJuegos = cargarJuegos() ;
//print_r($arregloColeccionDeJuegos) ;


//PARTE AGUS
 //INICIAMOS PROGRAMA
do 
{
  $opcionElegida=seleccionarOpcion() ;
  switch($opcionElegida){
    case 1:
    include_once("tateti.php");
    $juego=jugar();
    imprimirResultado($juego);
    $arregloColeccionDeJuegos = agregarJuego ($arregloColeccionDeJuegos,$juego) ;
    break;
    case 2:
    echo "Ingrese un numero de partida: ";
    $numeroPartida=trim(fgets(STDIN)) ;
    datoPartida($arregloColeccionDeJuegos,$numeroPartida);
  
    break ;
    case 3 :
    echo "Ingrese nombre : ";
    $nombreJugador= strtoupper (trim(fgets(STDIN))) ;
    $numeroPrimerPartida=primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador);
    echo "***************************************\n";
      echo "Juego TATETI: ".$numeroPrimerPartida ; 
      "\nJugador X: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCruz"]. " Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]." Puntos ".
      "\nJugador O: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCirculo"]." Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";
    break ;
    
    case 4 :
    $simboloElegido = simboloValido() ;
    var_dump ($simboloElegido) ;
    $totalGanados = juegosGanados($arregloColeccionDeJuegos) ;
    var_dump ($totalGanados) . "\n";  
    $ganadosElegido = juegosGanadosSimbolo($arregloColeccionDeJuegos , $simboloElegido ) ;
    var_dump ($ganadosElegido) . "\n";
    $porcentaje = ($ganadosElegido * $totalGanados) / 100 ;
    echo "El porcentaje de ganados de " . $simboloElegido . " es " . $porcentaje . " % \n" ;
    break ;
    case 5 :
    //Falta hacer que funcione bien
    echo "Ingrese el nombre de un jugador: " ;
    $nomJugador = strtoupper (trim(fgets(STDIN))) ;
    $primerGanador = resumenJugador ($arregloColeccionDeJuegos , $nomJugador) ;
    
    echo "Jugador:" . $primerGanador["nombre"] ."\n" ;
    echo "GANO: ". $primerGanador["juegosGanados"] ."\n";
    echo "PERDIO: ". $primerGanador["juegosPerdidos"] ."\n" ;
    echo "EMPATO: " . $primerGanador["juegosEmpatados"] ."\n" ;
    echo "Puntos acumulados: " . $primerGanador["puntosAcumulados"] ."\n" ; 
    break ;
    
    case 6 ;
    ordenarColeccionDeJuegos($arregloColeccionDeJuegos) ;        
    break ;
    }    
} while ($opcionElegida != 7);
