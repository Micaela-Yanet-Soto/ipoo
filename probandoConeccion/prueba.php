<?php
echo"Ingrese un numero mayor a 0 y menor que 20 ";
$num= trim(fgets(STDIN));

if($num>0){
    echo"El numero se encuentra dentro del rango";
}else{
    echo"el numero seleccionado no se encuntra dentro del rango dado";
}