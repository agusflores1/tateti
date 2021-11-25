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

/** Punto 4:
 * Funcion que recibe un arreglo y un numero de partida y muestra en pantalla el resultado
 * @param $arreglo array
 * @param $numeroJuego1 int
 */
function datoPartida($arreglo,$numeroJuego1){
    if ($numeroJuego1>=1 && ($numeroJuego1<count($arreglo) +1)){  
      $numeroJuego1 = $numeroJuego1 - 1 ; // le resto 1 al numero ingreaso por el usuario porque el indice arranca en 0
      
      if ($arreglo[$numeroJuego1]["puntosCruz"]<$arreglo[$numeroJuego1]["puntosCirculo"])
      {echo "***************************************\n";
      echo "Juego TATETI: ".($numeroJuego1 + 1 ) ." GANO O ".
       "\nJugador X: ".$arreglo[$numeroJuego1]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroJuego1]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroJuego1]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroJuego1]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";
      }
      elseif($arreglo[$numeroJuego1]["puntosCruz"]>$arreglo[$numeroJuego1]["puntosCirculo"])
      {echo "***************************************\n";
      echo "Juego TATETI: ".($numeroJuego1 + 1 ) ." GANO X ".
       "\nJugador X: ".$arreglo[$numeroJuego1]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroJuego1]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroJuego1]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroJuego1]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";
      }
      else 
      {echo "***************************************\n";
      echo "Juego TATETI: ".($numeroJuego1 + 1 ) ." EMPATE ".
       "\nJugador X: ".$arreglo[$numeroJuego1]["jugadorCruz"]. " Obtuvo ".$arreglo[$numeroJuego1]["puntosCruz"]." Puntos "."\nJugador O: ".$arreglo[$numeroJuego1]["jugadorCirculo"]." Obtuvo ".$arreglo[$numeroJuego1]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";
      }
    }
    else 
    {
    echo "ERROR el numero de partida ingresado no existe " . "\n" ;
    }
}
/** Punto 3:
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @var int $numero
 * @return int
 */
function numeroEntre($min, $max){
  echo "Seleccione una opción del menú: "; 
  $numero = trim(fgets(STDIN));
  while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
    echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
    $numero = trim(fgets(STDIN));
  }
  return $numero;
}
/** Punto 2:
 * Funcion que muestra en pantalla el menu de opciones y retorna una opcion valida
 * @var int $opcion 
 * @return int $opcion
 */
function seleccionarOpcion (){
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
    $opcion = numeroEntre($min,$max);
  return $opcion;
  }
/** Punto 1:
 * Funcion que precarga 10 juegos al iniciar el programa  
 * @var array $arregloColeccionDeJuegos
 * @return array $arregloColeccionDeJuegos
 */
function cargarJuegos (){
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
/** Punto 5:
 * Función cuya entrada en la coleccion de juegos y un juego, y la función retorna la 
 * colección modificada al agregarse el nuevo juego
 * @param array $arreglo
 * @param int @nuevoJuego
 * @return array arreglo modificado con el juego nuevo
 */
function agregarJuego ($arreglo , $nuevoJuego ){
  //Queda completar con el código hecho por Emanuel
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
 * @return int retorna indice para ubicar el primer juego ganado por el jugador, si nunca gano, retorna -1
 */
 function primerJuegoGanado($arregloColeccionDeJuegos,$nombreJugador)
{
  $ganoJuego=-1;
  for ($i=0; $i<count($arregloColeccionDeJuegos) ; $i++) 
    { 
    if( $arregloColeccionDeJuegos[$i]["puntosCruz"]<>$arregloColeccionDeJuegos[$i]["puntosCirculo"])
    {
    if ($arregloColeccionDeJuegos[$i]["jugadorCruz"]==$nombreJugador && $arregloColeccionDeJuegos[$i]["puntosCruz"]>0) 
      {$ganoJuego=$i;
      $i=count($arregloColeccionDeJuegos)+1;
      }
       elseif($arregloColeccionDeJuegos[$i]["jugadorCirculo"]==$nombreJugador&& $arregloColeccionDeJuegos[$i]["puntosCirculo"]>0)
      {$ganoJuego=$i;
        $i=count($arregloColeccionDeJuegos)+1;
      }
      } 
        
  } 
  return $ganoJuego;
}

/** Punto 7:
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
          if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]==$arregloColeccionDeJuegos[$i]["puntosCruz"])
          {
          $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;
        }}
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
              if ($arregloColeccionDeJuegos[$i]["puntosCirculo"]==$arregloColeccionDeJuegos[$i]["puntosCruz"])
              $arregloResumenJugador["juegosEmpatados"]=$arregloResumenJugador["juegosEmpatados"]+1;
      }
    }
  }
  }
  return $arregloResumenJugador;
}
/** Punto 8:
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
/** Punto 9:
 * Implementar una función que dada una colección de juegos, retorne la cantidad de juegos ganados
 * sin importar si es X o O
 * @param array $arregloColeccionDeJuegos
 * @return int retorna la cantidad de juegos que se ganaron en total
 */
function juegosGanados($arregloColeccionDeJuegos){
  $cantJuegosGanados = 0;
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
 * @param array $arregloColeccionDeJuegos
 */
function ordenarColeccionDeJuegos($arregloColeccionDeJuegos){
  uasort ($arregloColeccionDeJuegos , "cmp" );
  print_r ($arregloColeccionDeJuegos);
}
// Funcion de comparacion para aplicar el orden al arreglo con la funcion predeterminada de PHP "uasort" del punto 11
function cmp ($a , $b){
  if ($a ["jugadorCirculo"] > $b ["jugadorCirculo"]) {
    return 1 ;
  } elseif ($a ["jugadorCirculo"] < $b ["jugadorCirculo"]){
    return -1 ;
  } else {
    return 0 ;
  }
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/** @param array $arregloColeccionDeJuegos , $juego , $primerGanador
* @var int $opcionElegida , $numeroPartida , $numeroPrimerPartida , $totalGanados , $ganadosElegido
* @var string $nombreJugador , $simboloElegido , $nomJugador
* @var float $porcentaje
*/

//Inicialización de variables:
$arregloColeccionDeJuegos = [];
//Proceso:
$arregloColeccionDeJuegos = cargarJuegos();

 //Menú
do{
  $opcionElegida=seleccionarOpcion();
  switch($opcionElegida){
    //Opción 1: Jugar TaTeTi
    case 1:
    include_once("tateti.php");
    $juego=jugar();
    imprimirResultado($juego);
    $arregloColeccionDeJuegos = agregarJuego ($arregloColeccionDeJuegos,$juego) ;
    //var_dump($arregloColeccionDeJuegos)
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
    if ($numeroPrimerPartida==-1){
      echo "El jugador ".$nombreJugador." no gano ninguna partida \n"; }
    else{
      if ($arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]>$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"])
    {echo "***************************************\n";
    echo "Juego TATETI: ".$numeroPrimerPartida ." GANO X "; 
    echo "\nJugador X: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCruz"]. " Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]." Puntos ".
    "\nJugador O: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCirculo"]." Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"]." Puntos \n";
      echo "***************************************\n";} 
      elseif ($arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]<$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"])
      {echo "***************************************\n";
      echo "Juego TATETI: ".$numeroPrimerPartida ." GANO O "; 
      echo "\nJugador X: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCruz"]. " Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]." Puntos ".
      "\nJugador O: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCirculo"]." Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"]." Puntos \n";
        echo "***************************************\n";
      }
      else {
        {echo "***************************************\n";
        echo "Juego TATETI: ".$numeroPrimerPartida ." EMPATE "; 
        echo "\nJugador X: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCruz"]. " Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCruz"]." Puntos ".
        "\nJugador O: ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["jugadorCirculo"]." Obtuvo ".$arregloColeccionDeJuegos[$numeroPrimerPartida]["puntosCirculo"]." Puntos \n";
          echo "***************************************\n";} } 
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
    $primerGanador = resumenJugador ($arregloColeccionDeJuegos,$nomJugador) ;
    echo "*********************************************\n";
    echo "Jugador:" . $primerGanador["nombre"] ."\n" ;
    echo "GANO: ". $primerGanador["juegosGanados"] ."\n";
    echo "PERDIO: ". $primerGanador["juegosPerdidos"] ."\n" ;
    echo "EMPATO: " . $primerGanador["juegosEmpatados"] ."\n" ;
    echo "Total de Puntos acumulados: " . $primerGanador["puntosAcumulados"] ."\n" ; 
    echo "*********************************************\n";
    break ;
    //Opción 6: Mostrar listado de juegos ordenado por O
    case 6;
    ordenarColeccionDeJuegos($arregloColeccionDeJuegos);
    break ;
    }    
    //Opción 7: Salir
} while ($opcionElegida != 7);
