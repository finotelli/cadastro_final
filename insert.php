<?php
/*Criando conexão com o banco de dados */
$servidor = 'localhost';
$username = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor, $username, $password, $banco);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];



$sql = "INSERT INTO tb_cliente (nm_cliente,email_cliente,senha_cliente,endereco_cliente,nr_cep,complemento_cliente,nm_cidade,sg_estado) VALUES ('$nome', '$email', '$senha', '$endereco', '$cep', '$complemento', '$cidade', '$estado')";
$insert = mysqli_query($conexao, $sql);

if ($insert) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
