<?php 
require_once("conexao.php");

//RETIRAR ISSO DEPOIS
//Criar um Usuário Super com nivel de bispo padrão
$query = $pdo->query("SELECT * FROM usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg == 0)
$pdo->query("INSERT INTO usuarios SET nome = 'Administrador', email = 'contato@hugocursos.com.br', cpf = '00.000.000-00', senha = '123', nivel = 'Administrador' ");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $nome_sistema ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="vendor/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/css/main.css">

	<link rel="shortcut icon" href="img/favicon.ico" />

<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

  <link href="css/sb-admin-2.min.css" rel="stylesheet">


<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('vendor/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					
					   

  
  
    
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="autenticar.php">
					<dt colspan="7" align="center"><img src="img/logo.png" width="100"></dt>
					<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <p>Chris´m <span class="typed" data-typed-items="Cruz,André, Cruz André Dias,"></span></p>
    </div>
  </section><!-- End Hero -->
            <li><hr class="dropdown-divider"></li>
					<div class="wrap-input100 validate-input" data-validate = "Email ou NIF">
						<input class="input100" type="text" name="usuario" placeholder="Email ou NIF" required="" value="">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Email ou NIF">
						<input class="input100" type="password" name="senha" placeholder="Senha" required="" value="">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/js/main.js"></script>

<!-- Animação com nome login -->
	<script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>