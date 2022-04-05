<?php 
include "conex.php";

//cadastrando usuario 

function cadastro($nome, $contato, $vencimento){

    $sql = "INSERT INTO clientes(nome,contato,vencimento) VALUES ('$nome','$contato','$vencimento')";
    $query = $mysqli->query($sql);

}

//exibindo dados

function exibir($cad_cliente, $nome, $contato, $vencimento){

    $exibir = "SELECT * FROM clientes ORDER BY cad_cliente DESC LIMIT 1";
    $exib = $mysqli->query($exibir) or die ($mysqli->error);

}

//alterando dados

function alterar($nome, $contato, $vencimento){

    $alterar = "UPDATE clientes SET nome, contato WHERE nome = $nome";
    $query = $mysqli->query($alterar);

}

//apagando clientes 

function apagar($nome, $contato){

    $apagar = "DELETE FROM clientes WHERE nome = $nome, contato = $contato";
    $query = $mysqli->query($apagar);

}

?>