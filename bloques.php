<?php
 
//Condicionales

 # Todos los siguientes ejemplos tienen una condicion
//-------------------------------------------------------------
if(condition){
    #code...
} elseif(condition){
    #code...
}else{
    #code ...
}
//-------------------------------------------------------------
switch($variable){
    case "value":
        # code...
        break;
    case false:
        # code...
        break;
    default:
        #code ...
        break;
}
//-------------------------------------------------------------

foreach ($datos as $id => $name){
    # code ...
}


//-------------------------------------------------------------
// papa acceder de manera directa
// cuando consultamos datos y hacemos uso de estos codigos
foreach ($datos as $id => $name){
    # code ...
}

$a = 1;

//-------------------------------------------------------------
while ($a <= 10){
    #code ...
    $a++;
}
//-------------------------------------------------------------
// Este lo usamos cuando queremos que el ciclo se ejecute al menos una vez
do {
    # code ...
}while($a <= 10);

//-------------------------------------------------------------
for ($i = 0; $i < 30; $i++){
    # code ...
}//-------------------------------------------------------------