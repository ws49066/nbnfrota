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
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;height: 600px;margin-top: -50px">
                                <!-- Fechar o modal X -->
                                <div class="w3-center"><br> <!-- -->
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    <img src="img/frotalogo.png" alt="NBN" style="width:20%">
                                </div>
                                    <form class="w3-container" action="kminicial.php" method="post">

                                            <div class="form-esquerda">

                                                    <label>KM/H Inicial: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="km/h" name="kminicial" required>
                                                    <br><label>Placa: </label>
                                                    <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                           type="text" placeholder="placa do veiculo"  name="usrname"
                                                           required>

                                            </div>

                                            <div class="form-direita">
                                                <label>KM/H Final: </label>
                                                <input class=" w3-border w3-margin-bottom" style="width: 120px"
                                                       type="text" placeholder="km/h"  disabled name="usrname">
                                            </div>



                                            <div style="clear: both">
                                                <button onclick="document.getElementById('id01').style.display='none'"
                                                        type="button" class="w3-button w3-red"
                                                        style="margin-left: 200px;">Cancel
                                                </button>
                                                <button class="w3-button  w3-green " type="submit">Salvar</button>
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