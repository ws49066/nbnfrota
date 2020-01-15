<!DOCTYPE html>
<?php
session_start();
$login = $_SESSION['login'];
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>:: NBN FROTA  :: Controle de Combustível::</title>
    <link rel="stylesheet" type="text/css" href="css/interface_painel.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .dropbtn {
            background-color: transparent;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            float: right;
            margin-right: 5px;
        }

        .dropdown-content {
            bottom: 70px;
            right: -5px;
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 130px;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #111b31;color: white;}

        .dropdown:hover .dropdown-content {display: block;}


    </style>
</head>
<body>
<div id="interface_principal">
    <header id="cabecalho">
        <img src="img/frotalogo.png"/>
    </header>
    <section id="corpo">
        <nav id="menu">
            <table cellspacing="10">
                <tr>
                    <div class="w3-container">
                        <!-- ABERTURA DO MODAL botão KM/H INICIAL -->
                        <div>
                            <td onclick="document.getElementById('id01').style.display='block'">KM INICIAL</td>
                        </div>
                        <div id="id01" class="w3-modal" >
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:650px;height: 500px;margin:auto;position: relative;">
                                <!-- Fechar o modal X -->
                                <div class="w3-center"><br> <!-- -->
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    <img src="img/frotalogo.png" alt="NBN" style="width:20%">
                                </div>
                                <form class="w3-container" action="kmn.php" method="post">

                                    <div class="form-esquerda">

                                        <div class="alinhamento">
                                            <label>KM Inicial: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="number"  name="kminicial" required/>

                                            <br><label>Placa: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="text"   name="placa">

                                            <br><label>Ano do veículo: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="text"  name="ano_veiculo">

                                            <!--<input class=" w3-border w3-margin-bottom" style="width: 150px" type="week"  name="ano_veiculo" required>-->

                                            <br><label>Proprietario: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="text"  name="proprietario" required>

                                            <br><label>Requisição </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="text"  name="requerimento" required>
                                        </div>
                                    </div>

                                    <div class="form-esquerda">
                                        <div class="alinhamento">
                                            <label>KM Final: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="number" disabled name="kmfinal" required/>

                                            <br><label>Modelo: </label>
                                            <input class=" w3-border w3-margin-bottom" style="width: 120px" type="text"  name="modelo" required >

                                            <br><label>Combustível:</label>
                                            <input  class=" w3-border w3-margin-bottom" type="radio" name="combu" value="Gasolina">Gasolina<br>
                                            <input  class=" w3-border w3-margin-bottom" type="radio" name="combu" value="Alcool">Álcool<br>
                                            <input  class=" w3-border w3-margin-bottom" type="radio" name="combu" value="Diesel">Diesel<br>

                                            <div style="margin-top: -25px">
                                                <br><label>Litros: </label>
                                                <input class=" w3-border w3-margin-bottom" style="width: 120px" type="number" name="litro" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rodape">
                                        <button class="w3-button  w3-green " type="submit">Concluir</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!--------------------------- FIM DO MODAL KM/h INICIAL -------------------------------------->

</div>
<td>KM FINAL&nbsp;&nbsp;</td>
</tr>
<tr>
    <td>EDITAR</td>
    <td>REGISTRO</td>
</tr>
</table>
</nav>
</section>
<footer id="rodape">
    <p><?php
        echo ("Usuario: ".$_SESSION['operador']);
        ?>
    </p>
    <div class="dropdown">
        <button  class="dropbtn" ><img src="img/eng.png"/></button>
        <div class="dropdown-content">
            <a href="#">Cad. Veículos</a>
            <a href="#">Cad. Usuário</a>
        </div>
    </div>
</footer>
</div>
</body>
</html>