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
$km_inicial = $_POST['kminicial'];
$placa = $_POST['placa'];
$anoveiculo = $_POST['ano_veiculo'];
$proprietario = $_POST['proprietario'];
$requisicao = $_POST['requerimento'];
$modelo = $_POST['modelo'];
$combustivel = $_POST['combu'];
$litro = $_POST['litro'];
$data = date("Y/m/d H:i:s");
$status = '1';
$server = 'localhost';
$user = 'portal';
$pass = 'portal';
$db = 'nbnfrota';
$connect = mysqli_connect($server,$user,$pass) or trigger_error(mysqli_error(),E_USER_ERROR);
$db = mysqli_select_db($connect,$db);
$query = "INSERT INTO frota values ('','$placa','$anoveiculo','$modelo','$proprietario','$requisicao','$litro','$km_inicial',0,'$combustivel','$data',$status)";
mysqli_query($connect,$query) or die('Erro ao conectar');
echo"<script language='javascript' type='text/javascript'>alert('Kilometragem registrada com sucesso!');window.location.href='painel.php';</script>";
?>

*/
?>
</body>
</html>
