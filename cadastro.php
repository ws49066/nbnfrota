<?php
$conn = mysqli_connect("localhost","portal","portal");
mysqli_select_db("nbnfrota",$conn);

$nm = addslashes(trim($_GET["nome"]));
$se = addslashes(trim($_GET["senha"]));
$nome = "wanderson silva";
$sql = 'INSERT INTO clientes(login,senha,nome) VALUES("$nm","$se","$nome")';
$rs = mysqli_query($sql, $conn);
if(!$rs)
    echo "Não foi possivel realizar seu cadastro!";
else
    echo $nm;

mysqli_close();

?>