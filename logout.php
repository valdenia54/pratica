<?php
//inicia a sessão para poder manipular variáveis de sessão
session_start();

//remove todas as variáveis de sessão (limpa os dados do usuário logado)
session_unset();

// destroi completamente a sessão do usuário (finalizar o login)
session_destroy();

//redireciona o usuário de volta para a tela de login
header( "location: login.php");
exit; // encerra o script imediatamente após o rederecionamento
?>
