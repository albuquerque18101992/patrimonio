<?php
session_start();
include_once('conexao.php');

//$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM tb_usuario WHERE id_usuario = '6' ";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href='../css/bootstrap.css' rel="stylesheet">

	<!--Link Font Awesome-->
	<script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

	<!--Style-->
	<link href='../css/estilo.css' rel="stylesheet">

	<!--Icone da aba, aba do navegador-->
	<link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

	<title>Editar Usuário</title>

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
		<div class="foto-logo">
			<div class="row">
				<div class="col-md-12">
					<img src='../imagens/logo_os.png' alt="OS-SantaCatarina" width="100%" height="100%">
				</div>
			</div>
		</div>

		<div class="titulo" style="background-color: #28a745;">
			<h2>Editando Usuário</h2>
		</div>

		<form class="form-horizontal" action="processa_editar_criar_usuario.php" method="POST" autocomplete="off">
			<input type="hidden" name="id_usuario" value="<?php echo $row_usuario['id_usuario']; ?>">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><i class="fas fa-user-plus"></i> Nome do Usuário</label>
						<input type="text" name="pessoa" class="form-control" id="usuario" placeholder="Usuário" value="<?php echo $row_usuario['pessoa']; ?>" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><i class="fas fa-university"></i> Unidade</label required>
						<select type="text" name="unidade" class="form-control" id="unidade" onclick="formatar()">
							<option selected disabled>Escolha Unidade</option>
							<?php
							include_once("conexao.php");
							$consult = "SELECT * FROM tb_unidades WHERE cnes ORDER BY nome_da_unidade";
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
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="fas fa-unlock-alt"></i> Senha</label>
						<input type="text" name="senha" class="form-control" id="senha" placeholder="Senha entre 4 e 6 caracteres" maxlength="6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="far fa-address-card"></i> Login</label>
						<input type="text" name="login_usuario" class="form-control" id="login" placeholder="Login" value="<?php echo $row_usuario['login_usuario']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="fas fa-id-badge"></i> Número Crachá</label>
						<input type="text" name="cracha" class="form-control" id="cracha" placeholder="Matrícula" maxlength="12" value="<?php echo $row_usuario['cracha'] ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="fas fa-sort-numeric-up"></i> CPF</label>
						<input type="text" name="documento" class="form-control" maxlength="14" id="documento" placeholder="CPF" onkeypress="this.value = FormataCpf(event)" onpaste="return false;" value="<?php echo $row_usuario['documento'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<label for="exampleFormControlSelect1"><i class="fas fa-venus-mars"></i> Sexo</label>
					<select type="text" name="sexo" class="form-control">
						<option selected disabled>SELECIONAR</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
				</div>
				<div class="col-md-6">
					<label for="exampleFormControlSelect1"><i class="fas fa-database"></i> Nível de acesso</label>
					<select type="text" name="nivel_acesso" class="form-control" name="fabricante" id="formatar">
						<option selected disabled>SELECIONAR</option>
						<option value="administrador">Administrador</option>
						<option value="unidade">Unidade</option>
						<option value="simpress">Simpress</option>
						<option value="tecnico">Técnicos</option>
					</select>
				</div>
			</div>
			<div class="cadastrar">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<input class="btn btn-outline-success" id="bt_cadastrar" type="submit" name="submit" value="Dados alterados">
						</div>
					</div>
				</div>
			</div>
		</form>
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
			$("#cpf").keypress(verificaNumero);
		});

		function FormataCpf(evt) {
			vr = (navigator.appName == 'Netscape') ? evt.target.value : evt.srcElement.value;
			if (vr.length == 3) vr = vr + ".";
			if (vr.length == 7) vr = vr + ".";
			if (vr.length == 11) vr = vr + "-";
			return vr;
		}
	</script>

	<script src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>