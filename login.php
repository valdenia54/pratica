<?php 
if (isset($_GET['sucesso'])) {
// verifica se há o parâmetro 'sucesso' na URL (ex: login.php?sucesso=1)
// se existir, mostra uma mensagem de sucesso
echo "<p style = 'color: green;'>conta criada com sucesso! faça login.</p>";
}
if (isset($_GET['erro'])) {
   //verifica se há o parâmetro 'erro' na URL (ex: login.php?erro=senha)

if($_GET['erro']=='senha'){ 
// se o erro for 'senha', mostra mensagem de erro para senha incorreta
echo"<p style= 'color: red;' >senha incorreta.</p> ";

 }elseif($_GET['erro']=='email') {
// se o erro for 'email', mostra mensagem de erro para email não encontrado
echo "<p style ='color: red;'>email não encontrado.</p>";
 }
}
?>
<h2>login</h2>
<!--titulo da pagina -->

<form action="process_login.php" method="post">
<!-- Inicio do formulário. Ao enviar, os dados irão para 'process_login.php' usando o metodo POST-->

Email: <input type = "email" name = "email" required><br><br>
<!-- campo de entrada para email.Obrigatório(required)-->

senha:<input type = "password" name = "senha" required><br><br>
<!-- campo de entrada para a senha. os caracteres são ocultos.obrigatório -->

<button type ="submit">entrar</button>
<!-- botão que envia o formulário para ser processado -->
</form>
<!-- fim do formulário -->

<p>não tem conta? <a href = "register.php">criar conta </a></p>
<!--link para redirecionar á tela de cadastro caso o usuário ainda não tenha conta -->
 
