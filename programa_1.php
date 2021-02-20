<?php // Etiquetas de php
    // Comentarios
    // Comentario de una línea
    # Comentario de una línea
    /* Comentario
        de 
        varias
        líneas
    */

    // Mostrar contenido
    echo "Para mostrar algo en pantalla usamos la funcion echo seguido de comillas y lo que queremos mostrar sin olvidar el ; al final";
    // Imprime un salto de línea para separar los textos etiqueta de HTML
    echo "<br />";

    // Aritmética
    # Suma
    echo 10 + 1;
    echo "<br />";
    # Resta
    echo 10 - 2;
    echo "<br />";
    # Multiplicación
    echo 10 * 3;
    echo "<br />";
    # División 
    echo 10 / 4;
    echo "<br />";
    # Módulo o resto
    echo 10 % 5; 
    echo "<br />";

    // Variables
    echo "Todas las variabes deben ser declaradas y llamadas con el signo de dolar $";
    echo "<br />";
    echo "El nombre identificador de la variable no puede empezar con numeros ni puede tener espacios";
    echo "<br />";
    // Ejemplos
    # Cadena
    $nombre = "Diego Glez";
    # Número
    $edad = 24;
    # Booleano en caso de ser FALSE se define como 0, pero puede ser TRUE verdadero 1
    $verdad_bool = TRUE;
    # Se puede declarar una variable con null
    $nulo = null; 
    # Para saber si una variable es null podemos usar la siguiente función
    is_null($nulo);
    
    // Imprimir una variable
    echo $nombre;
    echo "<br />La suma número y carácter númerico funciona con warrning = ";
	$numero_a = 2;
	$caracter_b = "3";
    // echo $numero_a + $caracter_b;
    echo "<br /> La suma número y cadena tambien pero solo toma los primeros números, aunque esto provoca un error de advertencia";
	$numero_c = 4;
	$cadena_d = "21ldldld1";
    //echo $numero_c + $cadena_d;
    echo "<br /> La suma número y una letra no toma válor del ascii que supone cada letra como un número por lo que se provoca un Warning";
	$numero_e = 4;
	$caracter_f = "W";
	//echo $numero_e + $caracter_f;
	echo "<br /> La suma cadenas no se realiza y provoca 2 warnings regresando 0";
	$cadena_g = "Hola ";
	$cadena_d = "Mundo";
    //echo $cadena_g + $cadena_d;
    echo "<br />";
    
    // Concatenación
    echo "Para unir variables en cadena usamos el . <br/>";
    $cadena = "Hola" . " como ";
	$cadena .= 'Estas ';
	$cadena .= 34;
    echo $cadena . "<br/>";
    
    # Otra manera de concatenar
    $cadena_1 = " mundo";
    $cadena_2 = " :D";
    echo "Hola". ($cadena_1 . $cadena_2) . '<br/>';
    
    // Constantes
    # Constante Pi definida por PHP
    echo M_PI; 
    echo "<br />";
    # Redondear un número real
    echo round(M_PI); 
    echo "<br />";
    $a = 23.76545678;
    # Redondeo especificando la precision de decimales
    echo round($a, 3);
    echo "<br />";

    # Definición de una constante
    define ("SALTO","<br>");

    // Diferentes formas de usar la función echo
    # Se utiliza la constante de SALTO con una concatenación
    echo 'comillas simples' . SALTO; 
    echo ('parentesis y comillas simples') . SALTO;
    echo ("con parantesis y comillas dobles") . SALTO;
	echo '<h1> HTML comillas simples </h1>' . SALTO;
	echo "comillas dobles" . SALTO;
	echo "<h2> HTML comillas dobles </h2>".SALTO;
	$a = 5;
    // Al usar la tecla escape se considera como texto e igual se puede mostrar el contenido de una variable dentro de comillas
	echo "El valor de \$a es $a" . SALTO;

    # Número aleatorio
    echo rand() . SALTO; 
    # Número al azar con rango
    echo rand(10, 50) . SALTO; 
    $cadena = "Hola mundo";
    # Extrae una letra al azar de la cadena
    echo substr($cadena, rand(0, strlen($cadena) - 1), 1) . SALTO; 

?>