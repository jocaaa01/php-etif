<?php 

// Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor
define('PI', 3.14); // ,true); como tercer parametro no funciona en la version PHP8
define('NOMBRE', 'Marc');
// define('NOMBRE', 'Esteve');

echo NOMBRE;

echo "<br>";
// echo Pi;
echo PI;

echo "<br>";
// echo pi;

const CONSTANTE = 'Hola Mundo';

echo CONSTANTE;
echo "<br>";
//const CONSTANTE = 3; //Esta sentencia no se puede realizar
const OTRA = 'Hola Mundo'; //Dos constantes pueden tener el mismo valor

// En las variables si podemos cambiar el valor que se le asigno.

$nombre = "Marc";
//echo $nombre; // Mostraria Marc en pantalla

$nombre = "Esteve";
//echo $nombre; // Mostraria Esteve en pantalla

?>