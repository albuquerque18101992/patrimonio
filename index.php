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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>

    <link rel="icon" href='../patrimonio/imagens/logo_aba.png'>

    <title>Patrimônio</title>

    <style>
        .container-fluid {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(217, 224, 227);
        }

        .menu {
            width: 100%;
            height: 54px;
            background-color: rgb(73, 112, 161);
            font-family: Arial;
            position: fixed;
            /*Sobrepor menu sobre DIV.*/
            z-index: 9;
        }

        #bt {
            color: black;
            border-radius: 5px;
            width: 237px;
        }

        .dmr {
            width: 100%;
            background-color: rgb(73, 112, 161);
            font-family: Arial;
            position: fixed;
            bottom: 0;
            text-align: center;
            padding: 15px;
        }

        @media(max-width: 800px) {
            label[for="bt_menu"] {
                display: block;
            }

            #bt_menu:checked~.menu {
                margin-left: 0;
            }

            .menu {
                margin-top: 5px;
                margin-left: -100%;
                transition: all .4s;
            }

            .menu ul li {
                width: 100%;
                float: none;
            }

            .menu ul ul {
                position: static;
                overflow: hidden;
                max-height: 0;
                transition: all .4s;
            }

            .menu ul li:hover ul {
                height: auto;
                max-height: 200px;
            }

            .dmr {
                position: 50px;
            }

        }
    </style>

</head>

<body>

    <div class="menu">

    </div>
    <form action="validar.php" method="POST" autocomplete="off">
        <div class="posicao_de_logo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="foto text-center">
                            <img src='../patrimonio/imagens/logo_login.png' alt="PC" width="300">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Login" name="login_usuario" style="border-right: none;" required>
                            <div class="input-group-append">
                                <div class="input-group-text" style="background-color: #FFF">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" type="password" placeholder="Senha" name="senha" maxlength="10" style="border-right: none;" required>
                            <div class="input-group-append">
                                <div class="input-group-text" style="background-color: #FFF">
                                    <i class="fas fa-key"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <input class="btn btn-outline-primary" id="bt" type="submit" value="Enviar">
                        </div>
                    </div>
                </div>
                <br>

                <!--Script abaixo emite a mensagem de erro "Usuario ou senha invalido"-->
                <p class="text-center text-danger">
                    <?php
                    if (isset($_SESSION['loginErro'])) {
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                    ?>
                </p>


            </div>
        </div>
    </form>
    <div class="dmr">
        Sistema de equipamentos do Setor de Tecnologia da Informação. Para Contatos (11)5613-4444 Ramal 109
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>