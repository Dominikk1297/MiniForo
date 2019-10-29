<?php
function numeropalabras($comentario){
    $contp=1;
    for ($i=0; $i<strlen($comentario);$i++){
        if($comentario[$i]==" "){
            $contp++;
        }
        
    }return $contp;
}
function numeroletras($comentario){
   $contl=strlen($comentario);
   return $contl;
}
function letrarepetida($comentario){
    $max=0;
    $letra=null;
    $letrarepetida=null;
    for($i=0;$i<strlen($comentario);$i++){
        $letra=$comentario[$i];
        if($letra!=" " && substr_count($comentario, $letra)>$max){
            $max=substr_count($comentario, $letra);
            $letrarepetida=$letra;
        }
    }return $letrarepetida;
}
function palabrarepetida($comentario){
    $max=0;
    $palabra=null;
    $palabrarepetida=null;
    for($i=0;$i<strlen($comentario);$i++){
        
        if($comentario[$i]!=" " && $comentario[$i]!=","){
            $palabra=$palabra.$comentario[$i];
            
        }else{
            if(substr_count($comentario, $palabra)>$max){
                $max=substr_count($comentario, $palabra);
                $palabrarepetida=$palabra;
            }
            
        }
    }return $palabrarepetida;
}

echo "Longitud: ".numeropalabras($_REQUEST['comentario1'])."<br>";
echo "El numero de letras es: ".numeroletras($_REQUEST['comentario1'])."<br>";
echo "La letra más repetida es: ".letrarepetida($_REQUEST['comentario1'])."<br>";
echo "La palabra más reptida es: ".palabrarepetida($_REQUEST['comentario1'])."<br>";
?>








 