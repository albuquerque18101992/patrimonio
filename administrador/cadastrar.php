<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href='../css/bootstrap.css' rel="stylesheet">

    <!--Link Font Awesome-->
    <script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>

    <!--Style-->
    <link href='../css/estilo.css' rel="stylesheet">

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title>Cadastrar</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>


<body>
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href='../administrador/home.php'>Home</a></li>
            <li><a href='../administrador/equipamentos.php'>Equipamentos</a>
                <ul>
                    <li><a href='../administrador/maquinas_patrimonio.php'>Patrimônios</a></li>
                    <li><a href="#">Alugadas</a></li>
                </ul>
            </li>
            <li><a href='../administrador/cadastrar.php'>Cadastrar</a></li>
            <li><a href='../administrador/impressoras.php'>Impressoras</a>
            <li><a href='../administrador/admin.php'>Administrador</a>
                <ul>
                    <li><a href='../administrador/criar_usuario.php'>Adicionar Usuário</a></li>
                    <li><a href='../administrador/criar_unidade.php'>Adicionar Unidade</a></li>
                </ul>
            </li>
            <li><a href='../administrador/estoque.php'>Estoque</a></li>
        </ul>
        <div class="posicao-btn-sair">
            <button class="btn_sair btn-green">SAIR</button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src='../imagens/logo_os.png' alt="OS-SantaCatarina" width="100%" height="100%">
            </div>
        </div>
        <div class="titulo">
            <h2>Cadastrar Equipamentos de Informática</h2>
        </div>
        <hr>
        <form method="POST" action="salvar_cadastar.php" autocomplete="off">
            <div class="select-caixas">
                <div class="row">
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="fas fa-map-marker-alt"></i> Localização</label>
                        <select type="text" name="localizacao" class="form-control" id="formatar">
                            <option selected disabled>SELECIONAR</option>
                            <option>Administração</option>
                            <option>Call Center</option>
                            <option>Consultório Médico</option>
                            <option>Consultório Odontologico</option>
                            <option>Data Center</option>
                            <option>Farmácia</option>
                            <option>Recepção</option>
                            <option>Sala de Acolhimento</option>
                            <option>Sala de Almoxarifado</option>
                            <option>Sala de Coleta</option>
                            <option>Sala de Curativo</option>
                            <option>Sala de Demanda</option>
                            <option>Sala de Enfermagem</option>
                            <option>Sala de Estudos</option>
                            <option>Sala de Farmácia Satélite</option>
                            <option>Sala de Faturamento</option>
                            <option>Sala de Gerência</option>
                            <option>Sala de Instalação</option>
                            <option>Sala de Medicação</option>
                            <option>Sala de Observação Adulto</option>
                            <option>Sala de Observação Infantil</option>
                            <option>Sala de Ortopedia</option>
                            <option>Sala de Papanicolau</option>
                            <option>Sala de Psiquiatria</option>
                            <option>Sala de Raio X</option>
                            <option>Sala de Regulação</option>
                            <option>Sala Saúde da Mulher</option>
                            <option>Sala de Triagem</option>
                            <option>Sala de Vacina</option>
                            <option>Sala de Vigilância</option>
                            <option>Sala dos ACS's</option>
                            <option>Sala Multi Uso</option>
                            <option>SAME</option>
                            <option>Serviço Social</option>
                            <option>Sinais Vitais</option>
                            <option>SUVIS</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="fas fa-award"></i> Fabricante</label>
                        <select type="text" name="fabricante" class="form-control" name="fabricante" id="formatar">
                            <option selected disabled>SELECIONAR</option>
                            <option>Dell</option>
                            <option>Positivo</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="far fa-folder-open"></i> Tipo</label>
                        <select type="text" name="contrato" class="form-control" name="tipo" id="formatar">
                            <option selected disabled id="selecionar_option">SELECIONAR</option>
                            <option>Alugada</option>
                            <option>Patrimônio</option>
                            <option>Serviços específicos</option>
                            <option>Outros</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="formulario">
                <div class="row">
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-laptop-medical"></i> Computadores</label>
                        <input type="text" name="numero_serie_cpu" class="form-control" id="exampleInputEmail1" maxlength="19" placeholder="Número de Série" <?php
                                                                                                                                                                if (!empty($_SESSION['value_numero_serie_cpu'])) {
                                                                                                                                                                    echo "value='" . $_SESSION['value_numero_serie_cpu'] . "'";
                                                                                                                                                                    unset($_SESSION['value_numero_serie_cpu']);
                                                                                                                                                                }
                                                                                                                                                                ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_serie_cpu'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_serie_cpu'] . "</p>";
                            unset($_SESSION['vazio_numero_serie_cpu']);
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-tv"></i> Monitores</label>
                        <input type="text" name="numero_serie_monitor" class="form-control" id="exampleInputEmail1" maxlength="19" placeholder="Número de Série" <?php
                                                                                                                                                                    if (!empty($_SESSION['value_numero_serie_monitor'])) {
                                                                                                                                                                        echo "value='" . $_SESSION['value_numero_serie_monitor'] . "'";
                                                                                                                                                                        unset($_SESSION['value_numero_serie_monitor']);
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_serie_monitor'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_serie_monitor'] . "</p>";
                            unset($_SESSION['vazio_numero_serie_monitor']);
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-mouse"></i> N/S Mouse</label>
                        <input type="text" name="numero_serie_mouse" class="form-control" id="exampleInputEmail1" maxlength="6" placeholder="Número de Série" <?php
                                                                                                                                                                if (!empty($_SESSION['value_numero_serie_mouse'])) {
                                                                                                                                                                    echo "value='" . $_SESSION['value_numero_serie_mouse'] . "'";
                                                                                                                                                                    unset($_SESSION['value_numero_serie_mouse']);
                                                                                                                                                                }
                                                                                                                                                                ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_serie_mouse'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_serie_mouse'] . "</p>";
                            unset($_SESSION['vazio_numero_serie_mouse']);
                        }
                        ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-keyboard"></i> N/S Teclado</label>
                        <input type="text" name="numero_serie_teclado" class="form-control" id="exampleInputEmail1" maxlength="6" placeholder="Número de Série" <?php
                                                                                                                                                                if (!empty($_SESSION['value_numero_serie_teclado'])) {
                                                                                                                                                                    echo "value='" . $_SESSION['value_numero_serie_teclado'] . "'";
                                                                                                                                                                    unset($_SESSION['value_numero_serie_teclado']);
                                                                                                                                                                }
                                                                                                                                                                ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_serie_teclado'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_serie_teclado'] . "</p>";
                            unset($_SESSION['vazio_numero_serie_teclado']);
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-laptop-medical"></i> Computadores</label>
                        <input type="text" name="numero_ti_cpu" class="form-control" id="exampleInputEmail1" maxlength="6" placeholder="Número T.I" <?php
                                                                                                                                                    if (!empty($_SESSION['value_numero_ti_cpu'])) {
                                                                                                                                                        echo "value='" . $_SESSION['value_numero_ti_cpu'] . "'";
                                                                                                                                                        unset($_SESSION['value_numero_ti_cpu']);
                                                                                                                                                    }
                                                                                                                                                    ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_ti_cpu'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_ti_cpu'] . "</p>";
                            unset($_SESSION['vazio_numero_ti_cpu']);
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><i class="fas fa-tv"></i> Monitores</label>
                        <input type="text" name="numero_ti_monitor" class="form-control" id="exampleInputEmail1" maxlength="6" placeholder="Número T.I" <?php
                                                                                                                                                        if (!empty($_SESSION['value_numero_ti_monitor'])) {
                                                                                                                                                            echo "value='" . $_SESSION['value_numero_ti_monitor'] . "'";
                                                                                                                                                            unset($_SESSION['value_numero_ti_monitor']);
                                                                                                                                                        }
                                                                                                                                                        ?>>
                        <?php
                        if (!empty($_SESSION['vazio_numero_ti_monitor'])) {
                            echo "<p style='color: #f00;'>" . $_SESSION['vazio_numero_ti_monitor'] . "</p>";
                            unset($_SESSION['vazio_numero_ti_monitor']);
                        }
                        ?>
                    </div>
                </div>
                <br>
                <div class="caixa_informacoes">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Informações Pertinentes ao Equipamento</label>
                            <textarea type="text-area" name="descricoes" placeholder="Observções sobre o equipamento ." style="width:70%;height:50px; border-radius:5px"></textarea>
                        </div>
                    </div>
                </div>
                <div class="cadastrar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center">
                                <input class="btn btn-outline-primary" id="bt_cadastrar" type="submit" value="Salvar dados">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <input class="btn btn-outline-primary" id="bt_cadastrar" type="reset" value="Limpar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
    </div>


    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <script>
        function verificaNumero(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        }
        $(document).ready(function() {
            $("#ip").keypress(verificaNumero);
        });

        function FormataCpf(evt) {
            vr = (navigator.appName == 'Netscape') ? evt.target.value : evt.srcElement.value;
            if (vr.length == 3) vr = vr + ".";
            if (vr.length == 7) vr = vr + ".";
            if (vr.length == 11) vr = vr + ".";

            return vr;
        }

        function test_select($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>