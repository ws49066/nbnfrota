<?php
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];   
$host = "localhost";
$db   = "nbnfrota";
$user = "portal";
$pass = "portal";
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR);
mysqli_select_db($con, $db);
$query = "SELECT * from usuario where login='$login' and senha='$senha'";
$verifica = mysqli_query($con, $query) or die("erro ao selecionar");
         if (mysqli_num_rows($verifica)==0){
             echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
            die();
         }else{
             $data = mysqli_fetch_array($verifica);
             $nome = $data['nome'];

             $_SESSION['operador'] = $nome;
             setcookie("login",$login);
             header("Location:painel.php");
         }

?>
