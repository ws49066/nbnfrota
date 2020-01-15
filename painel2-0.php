<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>:: NBN FROTA  :: Controle de Combustível::</title>
    <link rel="stylesheet" type="text/css" href="css/interface_painel.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                            <td onclick="document.getElementById('id01').style.display='block'">Km/h inicial</td>
                        </div>
                        <div id="id01" class="w3-modal" >
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:650px;height: 680px;margin:auto;position: relative;">
                                <!-- Fechar o modal X -->
                                <div class="w3-center"><br> <!-- -->
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    <img src="img/frotalogo.png" alt="NBN" style="width:20%">
                                </div>
                                    <form class="w3-container" action="painel2-0.php" method="post">

                                            <div class="form-esquerda">

                                                <div class="alinhamento">
                                                    <label>KM/H Inicial: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="number" placeholder="km/h" name="kminicial" required/>

                                                    <br><label>Placa: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="placa do veiculo" name="usrname"
                                                           required>

                                                    <br><label>Ano: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 150px"
                                                           type="date" placeholder="Ano do veiculo" name="usrname"
                                                           required>

                                                    <br><label>Proprietario: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="Ano do veiculo" name="usrname"
                                                           required>

                                                    <br><label>Requerimento: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="Ano do veiculo" name="usrname"
                                                           required>
                                                </div>
                                            </div>

                                            <div class="form-esquerda">
                                                <div class="alinhamento">
                                                    <label>KM/H Final: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="number" placeholder="km/h" disabled name="kmfinal" required/>

                                                    <br><label>Modelo: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="placa do veiculo" name="modelo"
                                                           required>

                                                    <br><label>Combustivel: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" name="usrname"
                                                           required>

                                                    <br><label>Data: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 150px"
                                                           type="datetime-local"  name="data"
                                                           required>

                                                    <br><label>Litros: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="number"  name="usrname"
                                                           required>
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
                            <td>km/h final</td>
                </tr>
                <tr>
                    <td>Editar</td>
                    <td>Registros</td>
                </tr>
            </table>
        </nav>
    </section>
    <footer id="rodape">
        <p><?php
         echo ("Usuario: Rayane Lima")
        ?></p>
    </footer>
</div>
</body>
</html>