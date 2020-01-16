<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sem título</title>
</head>
<body>
<?php
session_start();
//echo$_POST['info'];
$login = $_SESSION['login'];
$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$rg = $_POST['rg'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$host = "localhost";
$db   = "nbnfrota";
$user = "portal";
$pass = "portal";
$connect = mysqli_connect($host,$user,$pass) or trigger_error(mysqli_error(),E_USER_ERROR);
$db = mysqli_select_db($connect,$db);
$query = "INSERT INTO usuario values ('','$usuario','$senha','$nome','$tipo','$funcao','$rg','$nascimento','$telefone')";
mysqli_query($connect,$query) or die('Erro ao conectar');
echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='painel.php';</script>";
?>

*/
?>
</body>
</html>
