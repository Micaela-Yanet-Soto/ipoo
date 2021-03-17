<?php


/*
 * Realizar el diseño y la correspondiente implementación en PHP de un script vinotecaNqn.php del siguiente enunciado:


 Dado una estructura de arreglos asociativos, donde cada posición del arreglo se corresponde con una variedad de vino (malbec, cabernet Sauvignon, Merlot) y se almacena la siguiente información: variedad, cantidad de botellas, año de producción, precio por unidad:

 Implementar una función que reciba un arreglo con las características  mencionadas y retorne  un arreglo que por variedad de vino guarde la cantidad total de botellas y el precio promedio.
 Implementar una función main() que cree un arreglo con las características mencionadas, invoque a la función implementada en 1 y visualice su resultado
 Subir a su cuenta GitHub la resolución del Trabajo Practico de Repaso.
 Fecha de entrega 19/03/2021
 */
/**
 * ------------------GENERA LA ESTRUCTURA DE UN ARREGLO CON 3 VARIEDADES DE VINO
 * @return array string[][]|number[][]
 */
function vinos(){
    $variedadVino = array(
        "Malbec" => array(
            "Variedad " => "tinto",
            "Cantidad de botella " => 5,
            "Anio de produccion " => 2010,
            "Precio por unidad " => 807.76
        ),
        
        "Cabernet Souvignon" => array(
            "Variedad " => "tinto",
            "Cantidad de botella " => 45,
            "Anio de produccion " => 2009,
            "Precio por unidad " => 3450
        ),
        
        "Merlot" => array(
            "Variedad " => "tinto",
            "Cantidad de botella " => 10,
            "Anio de produccion " => 2000,
            "Precio por unidad " => 2089.50
        )
    );
    
    return $variedadVino;
}
/**
 * ----------------------Recorrey muestra el arreglo de la vinoteca
 * @param array $arregloVino
 */
function recorreArray($arregloVino) {
    
    foreach ($arregloVino as $arregloVino =>$detalle){
        echo "\n".$arregloVino."\n";
        foreach ($detalle as $indice =>$valor){
            echo $indice.":".$valor."\n";
            
        }
    }
}


// ---------------------------PROGRAMA PRINCIPAL

$arrVino = vinos();
echo recorreArray($arrVino);