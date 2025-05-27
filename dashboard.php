<<?php  
//inicia a sessão para pode acessar as variáveis da sessão
session_start ();

//Verifica se o usuário está logado (se a variavel de sessão 'usuario_id' existe)
if (isset ($_SESSION['usuario_id'])) {
//se não estiver logado, redireciona para a página de login 
header( "location: login.php");
exit; // Encerra o script imediatamente após o redirecionamento 
}

//Se o usuario estiver logado, exibe a mensagem de boas vindas com o nome armazenado na  
echo "<h2>Bem-vindo, " . $_SESSION['nome'] . "!</h2>";

//Exibe um link para o usuário sair da conta (logout)
echo "<a href'logout.php' Sair</a>";
?>
