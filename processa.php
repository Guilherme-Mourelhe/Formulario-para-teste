<?php 

include_once 'conecta.php';


$novo_telefone = $_POST['telefone'];

$consulta_telefone = "SELECT Telefone FROM form WHERE Telefone = '$novo_telefone'";
$valida_telefone = mysqli_query($conexao,$consulta_telefone);
$retorno_telefone = mysqli_num_rows($valida_telefone);

$novo_email = $_POST['email'];

$consulta_email = "SELECT Email FROM form WHERE Email = '$novo_email'";
$valida_email = mysqli_query($conexao,$consulta_email);
$retorno_email = mysqli_num_rows($valida_email);


if(isset($_POST['enviar']) && $retorno_telefone == 0 && $retorno_email == 0){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['data'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $inserir = "INSERT INTO form (Nome, Email, Telefone, Sexo, Nascimento, Cidade, Estado, Endereco)
    VALUES ('$nome', '$email', '$telefone',' $sexo', '$nascimento', '$cidade', '$estado', '$endereco')";

    mysqli_query($conexao, $inserir);

    var_dump($_POST);

    print ('Cliente cadastrado com sucesso!');

}else {

    if($retorno_telefone > 0){

        print('Telefone já cadastrado, tente outro numero.');
    }

    if($retorno_email > 0){

        print('Email já cadastrado, tente outro email.');
    }

    else{

        print ('Ocorreu um erro, tente novamente.');
    }
}




?>