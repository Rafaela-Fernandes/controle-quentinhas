<?php



function listarPratos($conexao){
$pratos= array();
$query= "SELECT * FROM  prato_principal";
$resultado = mysqli_query($conexao,$query);

    while($prato = mysqli_fetch_assoc($resultado)):
    array_push($pratos, $prato);
    endwhile;
    return $pratos;
}




function listarCarnes($conexao){
$carnes= array();
$query= "SELECT * FROM  carne";
$resultado = mysqli_query($conexao,$query);

    while($carne = mysqli_fetch_assoc($resultado)):
    array_push($carnes, $carne);
    endwhile;
    return $carnes;
}



function listarSaladas($conexao){
$saladas= array();
$query= "SELECT * FROM  salada";
$resultado = mysqli_query($conexao,$query);

    while($salada = mysqli_fetch_assoc($resultado)):
    array_push($saladas, $salada);
    endwhile;
    return $saladas;
}