<?php
session_start();
$login = $_POST['login'];
$_SESSION['login'] = $login;
$senha = $_POST['senha'];   
$host = "localhost";
$db   = "nbnfrota";
$user = "root";
$pass = "";
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR);
echo ("$senha");
mysqli_select_db($con, $db);
$query = "SELECT * from usuario where nome='$login' and senha='$senha'";
$verifica = mysqli_query($con, $query) or die("erro ao selecionar");
         if (mysqli_num_rows($verifica)==0){
             echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
            die();
         }else{
             setcookie("login",$login);
             header("Location:painel2-0.php");
                }
?>
