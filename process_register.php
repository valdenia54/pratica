<?php
//  inclui o arquivo de conexão com o banco de dados
require 'config/db.php';

// verifica se o formulário foi enviado utilizando o método POST
if ($_SERVER["REQUEST_METHOD"]=="POST") {

// pega os dados do formulário enviados pelo o método POST
$nome = $_POST['nome']; // nome digitado pelo usuário
$email = $_POST['email']; // email digitado pelo usuário

// criptografa a senha antes de salvar no banco de dados 
// password_hash() é uma função segura que utiliza o algoritmo bcrypt por padrão
$senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);

// prepara a quety SQL com parâmetro (?) para evitar SQL injection
$stmt = $conn->prepare ("INSERT INTO usuarios (nome,email,senha) values(?,?,?)");

// substitui os parâmetros da quety pelos valores reais de forma segura
//"sss" significa que estamos passando 3 strings (s=strings)
$stmt->bind_param(   "sss", :$nome, $senha);



}
?>