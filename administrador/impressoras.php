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

    <title>Impressoras</title>

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
                    <li><a href='../administrador/maquinas_alugadas.php'>Alugadas</a></li>
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
            <li><a href='../administrador/estoque_home.php'>Materiais</a></li>
        </ul>
        <div class="posicao-btn-sair">
            <button class="btn_sair btn-green"><i class="fas fa-sign-out-alt"></i> </button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src='../imagens/logo_os.png' alt="OS-SantaCatarina" width="100%" height="100%">
            </div>
        </div>
        <div class="titulo">
            <h2>Cadastrar Impressoras</h2>
        </div>
        <form method="POST" action="salvar_impressora.php" autocomplete="off">
            <div class="select-caixas">
                <div class="row">
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="fas fa-map-marker-alt"></i> Localização</label>
                        <select type="text" name="localizacao" class="form-control" id="formatar">
                        <option selected disabled>SELECIONAR</option>
                            <option value="adm">Administração</option>
                            <option value="call center">Call Center</option>
                            <option value="consultorio medico">Consultório Médico</option>
                            <option value="odontologia">Consultório Odontologico</option>
                            <option value="data center">Data Center</option>
                            <option value="farmacia">Farmácia</option>
                            <option value="recepcao">Recepção</option>
                            <option value="acolhimento">Sala de Acolhimento</option>
                            <option value="almoxarifado">Sala de Almoxarifado</option>
                            <option value="coleta">Sala de Coleta</option>
                            <option value="curativo">Sala de Curativo</option>
                            <option value="demanda">Sala de Demanda</option>
                            <option value="enfermagem">Sala de Enfermagem</option>
                            <option value="Sala estudos">Sala de Estudos</option>
                            <option value="farmacia satelite">Sala de Farmácia Satélite</option>
                            <option value="faturamento">Sala de Faturamento</option>
                            <option value="gerencia">Sala de Gerência</option>
                            <option value="intalacao">Sala de Instalação</option>
                            <option value="medicacao">Sala de Medicação</option>
                            <option value="obs adulto">Sala de Observação Adulto</option>
                            <option value="obs infantil">Sala de Observação Infantil</option>
                            <option value="ortopedia">Sala de Ortopedia</option>
                            <option value="papanicolau">Sala de Papanicolau</option>
                            <option value="siquiatria">Sala de Psiquiatria</option>
                            <option value="raio X">Sala de Raio X</option>
                            <option value="regulacao">Sala de Regulação</option>
                            <option value="saude da mulher">Sala Saúde da Mulher</option>
                            <option value="triagem">Sala de Triagem</option>
                            <option value="vacina">Sala de Vacina</option>
                            <option value="vigilancia">Sala de Vigilância</option>
                            <option value="acs">Sala dos ACS's</option>
                            <option value="multi uso">Sala Multi Uso</option>
                            <option value="same">SAME</option>
                            <option value="serviço social">Serviço Social</option>
                            <option value="sinais vitais">Sinais Vitais</option>
                            <option value="suvis">SUVIS</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="fas fa-award"></i> Fabricante</label>
                        <select type="text" name="fabricante" class="form-control" name="fabricante" id="formatar">
                            <option selected disabled>SELECIONAR</option>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="far fa-folder-open"></i> Tipo</label>
                        <select type="text" name="contrato" class="form-control" name="tipo" id="formatar" required>
                            <option selected disabled id="selecionar_option">SELECIONAR</option>
                            <option value="alugada">Alugada</option>
                            <option value="patrimonio">Patrimônio</option>
                            <option value="especificos">Serviços específicos</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label><i class="fas fa-university"></i> Unidade</label require>
                        <select type="text" name="unidade" class="form-control" id="unidade" onclick="formatar()">
                            <option selected disabled>Escolha Unidade</option required>
                            <?php
                            include_once("conexao.php");
                            $consult = "SELECT * FROM tb_unidades ORDER BY nome_da_unidade";
                            $consulta = mysqli_query($conn, $consult);
                            while ($row_cat_post = mysqli_fetch_assoc($consulta)) {
                                echo '<option value="' . $row_cat_post['nome_da_unidade'] . '"> ' . $row_cat_post['nome_da_unidade'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for=""><i class="fas fa-print"></i> Serial Equipamento</label>
                    <input type="text" name="serial_equipamento" class="form-control" id="exampleInputEmail1" maxlength="49" placeholder="Serial" required>
                </div>
                <div class="col-md-4">
                    <label for=""><i class="fas fa-tv"></i> Número T.I</label>
                    <input type="text" name="numero_serie_impressora" class="form-control" id="exampleInputEmail1" maxlength="6" placeholder="Número de Série T.I">
                </div>
                <div class="col-md-4">
                    <label for="exampleFormControlSelect1"><i class="fas fa-compress-arrows-alt"></i> Modelo</label>
                    <select type="text" name="modelo" class="form-control" id="formatar" required>
                        <option selected disabled id="selecionar_option">SELECIONAR</option>
                        <option value="4020">4020</option>
                        <option value="4070">4070</option>
                        <option value="4370">4370</option>
                        <option value="4510">4510</option>
                        <option value="4580">4580</option>
                        <option value="5370">5370</option>
                        <option value="MS610">MS610</option>
                        <option value="zebra">Zebra</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="formulario">
                <div class="caixa_informacoes">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Informações Pertinentes ao Equipamento</label>
                            <textarea type="text-area" name="descricoes" maxlength="280" placeholder="Observções sobre o equipamento ." style="width:80%;height:80px; border-radius:5px"></textarea>
                        </div>
                    </div>
                </div>
                <div class="cadastrar">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <input class="btn btn-outline-primary" id="bt_cadastrar" type="submit" value="Salvar dados">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <input class="btn btn-outline-primary" id="bt_cadastrar" type="reset" value="Limpar">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <a href='../administrador/todas_impressoras.php' class="btn btn-outline-primary" id="bt_cadastrar"> Mais detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>