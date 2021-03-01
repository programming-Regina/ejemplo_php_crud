<?php 
function monetiza($monto){
    $fmt = new NumberFormatter('es_AR', NumberFormatter::CURRENCY);
    echo $fmt->format($monto);  
}
