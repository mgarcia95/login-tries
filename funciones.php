<?php

function buscar ($usu, $cont){
    $encontrado=0;
    if(file_exists('datos.txt')){
        $f=fopen("datos.txt","r+");
        while(!feof($f) && $encontrado==0){
            $linea=fgets($f);
            $array=explode(";",$linea);
            if($array[4]==$usu && $array[5]==$cont){
                $encontrado=1;
            }
        } 
    }
    return $encontrado;
}

function datos ($usu){
    $encontrado=0;
    if(file_exists('datos.txt')){
        $f=fopen("datos.txt","r+");
        while(!feof($f) && $encontrado==0){
            $linea=fgets($f);
            $array=explode(";",$linea);
            if($array[4]==$usu){
                $encontrado=1;
            }
        } 
    }
    return $array;
}


?>