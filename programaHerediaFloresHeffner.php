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
/** Punto a pedido de la profe:
 * Funcion que recibe un arreglo y un numero de partida y muestra en pantalla los datos de la partida
 * @param $arreglo array
 * @param $numeroPartida int
 * funcion reusada en caso 2 y 3
 */
function mostrarJuego($arreglo,$numeroPartida) { 

  if ($arreglo[$numeroPartida]["puntosCruz"]<$arreglo[$numeroPartida]["puntosCirculo"]) {
    echo "***************************************\n";
    echo "Juego TATETI: ".($numeroPartida + 1 ) ." GANO O ".
    "\nJugador X: ".$arreglo[$numeroPartida]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroPartida]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroPartida]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroPartida]["puntosCirculo"]." Puntos \n";
    echo "***************************************\n";

  } elseif ($arreglo[$numeroPartida]["puntosCruz"]>$arreglo[$numeroPartida]["puntosCirculo"]) {
    
    echo "***************************************\n";
    echo "Juego TATETI: ".($numeroPartida + 1 ) ." GANO X ".
    "\nJugador X: ".$arreglo[$numeroPartida]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroPartida]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroPartida]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroPartida]["puntosCirculo"]." Puntos \n";
    echo "***************************************\n";
  } else {
    
    echo "***************************************\n";
    echo "Juego TATETI: ".($numeroPartida + 1 ) ." EMPATE ".
    "\nJugador X: ".$arreglo[$numeroPartida]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroPartida]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroPartida]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroPartida]["puntosCirculo"]." Puntos \n";
    echo "***************************************\n";
  }
}



/** Punto 4:
 * Funcion que recibe un arreglo y un numero de partida y muestra en pantalla el resultado
 * @param array $arreglo 
 * @param int $numeroJuego1
 */
function datoPartida($arreglo,$numeroJuego1)
{
    if ($numeroJuego1>=1 && ($numeroJuego1<count($arreglo) +1))
    {  
      $numeroJuego1 = $numeroJuego1 - 1 ; // le resto 1 al numero ingreaso por el usuario porque el indice arranca en 0
      mostrarJuego($arreglo,$numeroJuego1);
    }
    else 
    {
    echo "ERROR el numero de partida ingresado no existe " . "\n" ;
    }
}

/** Punto 2:
 * Funcion que muestra en pantalla el menu de opciones y retorna una opcion valida
 * @return int 
 */
function seleccionarOpcion (){
  //int $opcion

  echo "Menu de opciones:
    1) Jugar al tateti
    2) Mostrar un juego
    3) Mostrar el primer juego ganador
    4) Mostrar porcentaje de juegos ganados
    5) Mostrar resumen del jugador
    6) Mostrar listado de juegos ordenados por jugador O
    7) Salir \n";
  $min = 1 ;
  $max = 7 ;
  echo "Seleccione una opción del menú: "; 
  $opcion = solicitarNumeroEntre ($min,$max);
  
  return $opcion;

}

/** Punto 1:
 * Funcion que precarga 10 juegos al iniciar el programa  
 * @var array $arregloColeccionDeJuegos
 * @return array $arregloColeccionDeJuegos
 */
function cargarJuegos (){
$arregloColeccionDeJuegos = [];
//$CAMBIAR_POR_NOMBRE_COLECCION = [];

$jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
$jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
$jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
$jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
$jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
$jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
$jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
$jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",    "puntosCruz" => 1, "puntosCirculo" => 1];

array_push($arregloColeccionDeJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);
                                 

return $arregloColeccionDeJuegos;
}

/** Punto 5:
 * Función cuya entrada en la coleccion de juegos y un juego, y la función retorna la 
 * colección modificada al agregarse el nuevo juego
 * @param array $arreglo
 * @param int $nuevoJuego
 * @return array (arreglo modificado con el juego nuevo)
 */
function agregarJuego ($arreglo , $nuevoJuego ){
  //Int $n

  $n = count ($arreglo) ;
  $arreglo [$n] = $nuevoJuego ;
  
  return $arreglo ;
  
}

/** Punto 6:
 * Función que dada una colección de juegos y el nombre de un jugador, retorna el indice del primer juego
 * ganado por dicho jugador. Si el jugador no ganó ningún juego, la función debe retornar -1
 * @param array $arregloColeccionDeJuegos
 * @param string $nombreJugador
 * @return int (retorna indice para ubicar el primer juego ganado por el jugador, si nunca gano, retorna -1)
 */
 function primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador){
  // int $i , $n , $ganoJuego , $resultado
  
  $ganoJuego = -1 ;
  $i = 0 ;
  $n = count ($arregloColeccionDeJuegos) ;
  $resultado = 0 ;

  while ($i < $n  && $resultado == 0) {

    if( $arregloColeccionDeJuegos[$i]["puntosCruz"]<>$arregloColeccionDeJuegos[$i]["puntosCirculo"]){
      if ($arregloColeccionDeJuegos[$i]["jugadorCruz"]==$nombreJugador && $arregloColeccionDeJuegos[$i]["puntosCruz"] > 0) {
        
        $ganoJuego = $i ;
        $resultado = 1 ;

      } elseif ($arregloColeccionDeJuegos[$i]["jugadorCirculo"]==$nombreJugador&& $arregloColeccionDeJuegos[$i]["puntosCirculo"] > 0) {
        
        $ganoJuego = $i ;
        $resultado = 1 ;

      }

    }

    $i = $i + 1 ;

  }

  return $ganoJuego;
  
}

/** Punto 7:
 * Función que dada la colección de juegos y el nombre de un jugador, 
 * retorne el resumen del jugador
 * @param array $arregloColeccionDeJuegos
 * @param string $nombreJugador
 * @return array (arreglo con un resumen del jugador que ingresa por parámetro)
 */
function resumenJugador($arregloColeccionDeJuegos,$nombreJugador){
  //int $i
  
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
        } else {
          
          if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]==$arregloColeccionDeJuegos[$i]["puntosCruz"]){
          
            $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;
          
          }
        }
      //Si el jugador fue Circulo, almacena sus datos
      } else {
        
        $arregloResumenJugador["puntosAcumulados"]=$arregloResumenJugador["puntosAcumulados"]+$arregloColeccionDeJuegos[$i]["puntosCirculo"];
      
        //Si gano, agrega +1 en "juegosGanados"       
        if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]>$arregloColeccionDeJuegos[$i]["puntosCruz"]){

          $arregloResumenJugador["juegosGanados"]=$arregloResumenJugador["juegosGanados"]+1;
      
        //Si perdio, agrega +1 en "juegosPerdidos"
        } if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]<$arregloColeccionDeJuegos[$i]["puntosCruz"]){

          $arregloResumenJugador["juegosPerdidos"]=$arregloResumenJugador["juegosPerdidos"]+1;

        //Si empato, agrega +1 en "juegosEmpatados"
        } else {
              
          if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]==$arregloColeccionDeJuegos[$i]["puntosCruz"]){
              
            $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;

          }
        }
      }
    }
  }
  return $arregloResumenJugador;
}

/** Punto 8:
 * funcion que valida el simbolo ingresado y lo retorna 
 * @return string $simbolo (en mayusculas)
 */
function simboloValido(){
  //int $salida string $simbolo

  $salida = 0 ;
  do {
    echo"Seleccione un simbolo (X/O): " ;
    $simbolo=strtoupper (trim(fgets(STDIN))) ;
    if ($simbolo == "X" || $simbolo == "O"){

      $salida = 1 ;

    } else {

      echo "Error el simbolo seleccionado no es valido \n" ;

    }

  } while ($salida != 1) ;

  return $simbolo ;
  
}

/** Punto 9:
 * Implementar una función que dada una colección de juegos, retorne la cantidad de juegos ganados
 * sin importar si es X o O
 * @param array $arregloColeccionDeJuegos
 * @return int (retorna la cantidad de juegos que se ganaron en total)
 */
function juegosGanados($arregloColeccionDeJuegos){
  //int $cantJuegosGanados , $i

  $cantJuegosGanados = 0 ;

  for ($i=0 ; $i<count($arregloColeccionDeJuegos) ; $i++) { 
    
    if ($arregloColeccionDeJuegos[$i]["puntosCruz"]>$arregloColeccionDeJuegos[$i]["puntosCirculo"]||$arregloColeccionDeJuegos[$i]["puntosCruz"]<$arregloColeccionDeJuegos[$i]["puntosCirculo"]){
      
      $cantJuegosGanados = $cantJuegosGanados +1;
    }
  }
  
  return $cantJuegosGanados;

}

/** Punto 10:
 * Implementar una función que dada una colección de juegos y un símbolo, retorne la cantidad de
 * juegos ganados por el símbolo ingresado por parámetros
 * @param array $arregloColeccionDeJuegos
 * @param string $simbolo
 * @return int (cantidad de juegos ganados por el simbolo que ingresa por parámetro)
 */
function juegosGanadosSimbolo($arregloColeccionDeJuegos,$simbolo){
  //int $i , $cantJuegosGanadosSimbolo

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
 * muestre la colección de juegos ordenado por el nombre del jugador cuyo símbolo es "O"
 * @param array $arregloColeccionDeJuegos
 */
function ordenarColeccionDeJuegos($arregloColeccionDeJuegos){
  
  //ordena el arreglo tomando como parametro una funcion de comparacion establecida por el programador 
  //y mantiene la correlacion de los indices originales del arreglo   
  uasort ($arregloColeccionDeJuegos , 'cmp' );
  //muestra en pantalla el contenido de una variable de una forma legible para el usuario
  print_r ($arregloColeccionDeJuegos);

}

// Funcion de comparacion para aplicar el orden al arreglo con la funcion predeterminada de PHP "uasort" del punto 11

function cmp ($a , $b){
  
  if ($a ["jugadorCirculo"] > $b ["jugadorCirculo"]) {

      $orden = 1 ;

  } elseif ($a ["jugadorCirculo"] < $b ["jugadorCirculo"]){

      $orden = -1 ;

  } else {

      $orden = 0 ;
    
  }

  return $orden ;

}

/*Funcion que verifica si existe un jugador en el arreglo
*@param array $arreglo
*@param array $jugador 
*@return boolean
*/
function existeJugador($arreglo , $jugador){
  //int $i , $n boolean $existe 
  $i = 0 ;
  $n = count ($arreglo) ;
  $existe = false ;

  while ($i < $n && $existe == false ) {

    if ($arreglo[$i]["jugadorCruz"]==$jugador || $arreglo[$i]["jugadorCirculo"]==$jugador){

      $existe = true ;

    }    
    
    $i = $i +1 ;
  }
  return $existe ;

}


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/** array $arregloColeccionDeJuegos , $juego , $primerGanador
*   int $opcionElegida , $numeroPartida , $numeroPrimerPartida , $totalGanados , $ganadosElegido
*   string $nombreJugador , $simboloElegido , $nomJugador
*   float $porcentaje
*   boolean $verificar
*/

//Inicialización de variables:

include_once("tateti.php");
$arregloColeccionDeJuegos = [];

//Proceso:
$arregloColeccionDeJuegos = cargarJuegos();

 //Menú
do{
  $opcionElegida=seleccionarOpcion();
  /**la funcion "switch" es similar a una serie de sentencias "IF", funciona comparando una variable o condicion con distintos
   * valores dentro de la sentencia y ejecuta solo la parte del codigo que coincide con el valor comparado
   */  
  switch($opcionElegida){
    //Opción 1: Jugar TaTeTi
    case 1:
    
    $juego=jugar();
    imprimirResultado($juego);
    $arregloColeccionDeJuegos = agregarJuego ($arregloColeccionDeJuegos,$juego) ;
    
    break;
    //Opción 2: Mostrar un juego
    case 2:
    echo "Ingrese un numero de partida: ";
    $numeroPartida=trim(fgets(STDIN)) ;
    datoPartida($arregloColeccionDeJuegos,$numeroPartida);
    break ;
    //Opción 3: Mostrar el primer ganador
    case 3 :
    echo "Ingrese nombre : ";
    $nombreJugador= strtoupper (trim(fgets(STDIN))) ;
    $numeroPrimerPartida=primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador);
    if ($numeroPrimerPartida ==-1) {

      echo "El jugador ".$nombreJugador." no gano ninguna partida \n"; 

    }else {
      
      mostrarJuego($arregloColeccionDeJuegos,$numeroPrimerPartida); 
    }

    break;
    //Opción 4: Mostrar el porcentaje de juegos ganados
    case 4 :
    $simboloElegido = simboloValido();
    $totalGanados = juegosGanados($arregloColeccionDeJuegos) ;
    $ganadosElegido = juegosGanadosSimbolo($arregloColeccionDeJuegos , $simboloElegido );
    $porcentaje = ($ganadosElegido * 100) / $totalGanados ;
    echo "El porcentaje de ganados de " . $simboloElegido . " es " . round ($porcentaje , 2) . " % \n" ;
    break;
    //Opción 5: Mostrar el resumen del jugador
    case 5 :
    echo "Ingrese el nombre de un jugador: " ;
    $nomJugador = strtoupper (trim(fgets(STDIN)));
    $verificar = existeJugador($arregloColeccionDeJuegos , $nomJugador) ;
    if ($verificar == false){

      echo "El jugador " . $nomJugador . " no jugo ninguna partida \n" ;

    } else {  
    $primerGanador = resumenJugador ($arregloColeccionDeJuegos,$nomJugador) ;
    echo "*********************************************\n";
    echo "Jugador:" . $primerGanador["nombre"] ."\n" ;
    echo "GANO: ". $primerGanador["juegosGanados"] ."\n";
    echo "PERDIO: ". $primerGanador["juegosPerdidos"] ."\n" ;
    echo "EMPATO: " . $primerGanador["juegosEmpatados"] ."\n" ;
    echo "Total de Puntos acumulados: " . $primerGanador["puntosAcumulados"] ."\n" ; 
    echo "*********************************************\n";
    }
    break ;
    //Opción 6: Mostrar listado de juegos ordenado por O
    case 6;
    ordenarColeccionDeJuegos($arregloColeccionDeJuegos);
    break ;
  }    
  //Opción 7: Salir
} while ($opcionElegida != 7);
