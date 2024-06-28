<?php

$servidor = 'Localhost';
$usuario = 'root';
$senha = '';
$banco = 'Banco_cadastro';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){

    die('<h3> Erro de conexão' . mysqli_connect_error());
}


?>