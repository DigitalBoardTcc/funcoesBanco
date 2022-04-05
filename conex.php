<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'samuifight';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco);

if(!empty($_POST)){

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$vencimento = $_POST['vencimento'];

?>