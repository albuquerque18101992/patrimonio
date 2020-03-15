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
            <h2>Cadastrar Impressoras</h2>
        </div>
        <hr>
        <form method="POST" action="salvar_impressora.php" autocomplete="off">
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
                            <option>Samsung</option>
                            <option>HP</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlSelect1"><i class="far fa-folder-open"></i> Tipo</label>
                        <select type="text" name="contrato" class="form-control" name="tipo" id="formatar" required>
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
                    <div class="col-md-6">
                        <label for=""><i class="fas fa-print"></i> Serial Equipamento</label>
                        <input type="text" name="serial_equipamento" class="form-control" id="exampleInputEmail1" maxlength="49" placeholder="Serial" required>
                    </div>
                    <div class="col-md-6">
                        <label for=""><i class="fas fa-tv"></i> Número T.I</label>
                        <input type="text" name="numero_serie_impressora" class="form-control" id="exampleInputEmail1" maxlength="10" placeholder="Número de Série T.I">
                    </div>
                </div>
                <br>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>