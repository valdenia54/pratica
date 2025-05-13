
<?php 
// conecta ao banco de dados usando MySQLi
$host = 'localhost'; // servidor (normalmente localhost)
$user = 'root'; // usuario do MySQL
$pass = '';
$db = 'login_tutorial'; // nome do banco de dados

$conn = new mysqli($host,$user, $pass,$db); // cria conexão 

if($conn->connect_error){ //verifica se houve erro
die("falha na conexão:". $conn->connect_error);//exibi erro e para tudo    
}

?>