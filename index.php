<?php

$nombre= " pedro Perez ";
echo($nombre);
$producto1='arroz';
$producto2='panela';
$producto3='papa';
$producto4='atun';
$producto5='frijoles';
$producto6='carne';
$producto7='arepa';
$producto8='huevos';

$precio1= 1500;
$precio2=7000;
$precio3=8000;
$precio4=30000;
$precio5=2200;
$precio6=9000;
$precio7=4800;
$precio8=25000;
$precio9=10000;
$precio10=14000;
$productoEspecial='manzanas';

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

/*if ($total>80000)
{
echo('se pasa el presupuesto');
}else
{
echo('gracias por su compra');
} */

switch($productoEspecial){
case 'manzana':
    echo('tiene 10% descuento');
break;
case 'banano 5% descuento':
break;

default: 

echo('no hay descuento');

break;





}

?>