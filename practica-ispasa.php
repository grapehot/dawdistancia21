<?php

/**
 * Devuelve "Hola, caracola" y lo que quieras, prueba para la prractica 5
 *
 * @author Ismael Parra
 * @version 1
 * @param string $param1 la cadena de texto por añadir
 * @return string $param2 Devolveremos una cadena con un añadido
 * @access private
 * @param  string lo que sea. Controla la aparición de un elemento en la documentación
 *         generada. Al estar declarado como private, el elemento no aparece.
 */
function bloquedecodigo1($param1)
{

  echo "Hola, caracola";
  $param2 = "Hola ".($param1);
  return $param2;
}

/**
 *Esta función devuelve los años que quedan para la jubilación
 *
 * @author Ismael Parra 
 * @param integer $edad
 * @return integer $puntos  devolvemos un número
 * @version 1
 * @access private
 * @param string  nose genra en la docimentacion
*/
function edaddejubilacion($edad)
{
  echo "Te quedan".$edad;
  $puntos = $edad - 65;
  return $puntos;
}

?>
