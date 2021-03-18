<?php
/*
 * Alumno: Soto Micaela Yanet
 * Legajo: FAI-1391
 *
 * Realizar el diseño y la correspondiente implementación en PHP de un script vinotecaNqn.php del siguiente enunciado:


 Dado una estructura de arreglos asociativos, donde cada posición del arreglo se corresponde con una variedad de vino (malbec, cabernet Sauvignon, Merlot) y se almacena la siguiente información: variedad, cantidad de botellas, año de producción, precio por unidad:

 Implementar una función que reciba un arreglo con las características  mencionadas y retorne  un arreglo que por variedad de vino guarde la cantidad total de botellas y el precio promedio.
 Implementar una función main() que cree un arreglo con las características mencionadas, invoque a la función implementada en 1 y visualice su resultado
 Subir a su cuenta GitHub la resolución del Trabajo Practico de Repaso.
 Fecha de entrega 19/03/2021
 */


function variedadVino() {
    $variedadVino = array(
        "Malbec" => array(
            ["Variedad " =>"Tinto",
                "Cantidad de botella " => 5,
                "Anio de produccion " => 2010,
                "Precio por unidad " => 807.76],
            
            ["Variedad " =>"Rosado",
                "Cantidad de botella " => 20,
                "Anio de produccion " => 2000,
                "Precio por unidad " => 2085.50]),
        "Cabernet Sauvignon" => array(
            ["Variedad " =>"Blanco",
                "Cantidad de botella " => 45,
                "Anio de produccion " => 2015,
                "Precio por unidad " => 456.7],
            
            ["Variedad " =>"Blanco",
                "Cantidad de botella " => 3,
                "Anio de produccion " => 2010,
                "Precio por unidad " => 1965.6]),
        "Merlot" => array(
            ["Variedad " =>"Tinto",
                "Cantidad de botella " => 15,
                "Anio de produccion " => 2017,
                "Precio por unidad " => 1067.76],
            
            ["Variedad " =>"Blanco",
                "Cantidad de botella " => 27,
                "Anio de produccion " => 2020,
                "Precio por unidad " => 2045.50])
    );
    
    return $variedadVino;
}
/**
 * 
 * @param  $vinos
 */
function main($vinos) {
    foreach ($vinos as $vinos =>$detalle){//----Recorre el primer array
        echo "\n".$vinos."\n";
        foreach ($detalle as $valor){//Recorre el segundo array
            foreach ($valor as $key=>$val){//Recorre el tercer array
                echo $key.":".$val."\n";
            }
            echo"\n";
            
        }
    }
}
//Programa Principal


$arrVino= variedadVino();
echo main($arrVino);