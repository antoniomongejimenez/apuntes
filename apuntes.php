<?php
//Borrar variable
//unset(x) 


/**
 * isset($x) Para ver si existe la variable
 * Da falso si la variable no existe o es null y lo contrario si es transliterator_create_from_rules 
 */
//Ej: 
/*
$x = null
isset($x) = false */


/** =& 
 * $x = 4;
 * $y = 5;
 * $y =& $x;
 * si modificas uno de los dos cambia el otro ya que apuntan a la misma variable que apunta a un valor
 */


//Operdores lógicos 

/**
 * and y && e or y || Son lo mismo pero uno es estricto y el otro no
 * Eso quiere decir que uno es mas priotario que otro
 * && y || tienen mas prioridad que and y or
 */

/**
 * Prioridad
 * clone new
 * [
 * **
 * ++ -- 
 * instanceof
 * ! 
 * * / %
 * &&
 * ||
 * and
 * xor 
 * or
 */


//ARRAYS
/**
 * Elemento clave-valor
 * Las claves pueden ser numeros enteros o cadenas
 * Los tipos de los valores pueden ser de cualquier tipo
 * Se crean:
 * Forma antigua: array('a', 'b', 'c');
 * Otra forma: $a = ['a', 'b', 'c']
 * $a[0] da "a"
 * $a[1] = "z" sustituye ese por la z
 * $a[3] = "h" crea uno nuevo en la posición 3
 * unset($a[3]) borra el elemento 3
 * Si tu añades un elemento nuevo siempre se añade al final
 * $a[] = 'lo que sea' añade uno en la úĺtima posición  
 */

