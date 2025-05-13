<h2>criar conta</h2>
<!-- título da página exibido para o usuário-->

<form action="process_register.php" method="POST">
<!--    Início do formulário. os dados serão enviados para `percess_register.php`via método POST-->

Nome: <input type="text" name="nome" required><br><br>
<!-- campo para o usuário digitar seu email. o navegador valida o formato de email. obrigató-->

email: <input type="email" name="email" required><br><br>
<!--campo para o usuário digitar seu email. o navegador valida o formato de email. obrigatório-->

    senha : <input type="password" name="senha" required><br><br>
    <!-- campo para digitar a senha. o tipo "password" oculta os caracteres.obrigatório-->

    <button type="submit">cadastrar</button>
    <!--botão que envia os dados do formulário ao clicar-->
    </form>
    <!--fim do formulário-->

    <p>já tem conta? <a href ="login.php">entrar</a></p>
    <!--link para redirecionar á página de logni, caso p usuário já tenha conta-->