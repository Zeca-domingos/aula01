<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 20;

//var_dump($nome);
//var_dump($idade);

if($idade >= 0 && $idade <=12)
{
   for($i =0; $i <= count($categorias); $i++)
   {
     if($categorias[$i] == 'infantil')
         echo "O nadador " .$nome. " compete na categoria infantil";
   } 
}
else if($idade >= 13 && $idade <=18)
{
    for($i =0; $i <= count($categorias); $i++)
    {
     if($categorias[$i] == 'adolecente')
        echo "O nadador " .$nome. " compete na categoria adolecente";
         
   }
   
}
else
{
     for($i =0; $i <= count($categorias); $i++)
     {
       if($categorias[$i] == 'adulto')
         echo "O nadador ".$nome."  na categoria adulto";
        
     }
}
?>