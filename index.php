<?php
	$pdo = new PDO('mysql:host=localhost;dbname=landing_page_db','root','');
?>


<!DOCTYPE html>
<html>
<head>
	<title>SITE - ACADEMIA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width,initial-scale=1.0,maximum-scale=1.0'>
	<script type="text/javascript">

		/*Máscara de preeenchimento do input telefone*/
		function mascara_input(o,f){
			v_obj = o
			v_func = f
			setTimeout("execmascara(),1")
		}

		function execmascara(){
			v_obj.value = v_func(v_obj.value)
		}

		function mascara_telefone(v){
			v = v.replace(/\D/g,"");
			v = v.replace(/^(\d{2})(\d)/g,"($1) $2");
			v = v.replace(/(\d)(\d{4})$/,"$1-$2");
			return v;
		}

		function id(el){
			return document.getElementById(el);
		}

		window.onload = function(){
			id('telefone').onkeyup = function(){
				mascara_input(this, mascara_telefone);
			}
		}

	</script>

</head>
<body>

	<div class="header">
		<div class="center">
			<img src="images/logo-muscle.png">
			<div class="title-site">
			<h2>ACADEMIA FIT - LOREM IPSUM</h2>
		</div>
		</div><!--center-->
		
		
	</div><!--header-->

	<div class="container-banner">
		<div class="center">
			<div>
				<div class="container-list">
					<ul>
						<li>Os melhores profissionais do mercado</li>
						<li>Uma estrutura de tirar o fôlego</li>
						<li>Equipamentos de primeira linha</li>
						<li>Funcionamento 24h</li>
					</ul>
				</div><!--container-list-->
			</div>
			<div>
			<div class="form">
				<h2>Preencha o formulário e inicie seu preparo no mundo da musculação!</h2>
				<form method="post">

					<?php

						if(isset($_POST['acao'])){
							$nome = $_POST['nome'];
							$email = $_POST['email'];
							$telefone = $_POST['telefone'];
							$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
							$sql->execute(array($nome,$email,$telefone));
							echo '<div class="sucesso">Seu formulário foi enviado com sucesso!</div>';
						}

					?>

					<div class="input-container">
						<span>Nome*</span>
						<input type="text" name="nome" required="">
					</div><!--input-container-->

					<div class="input-container">
						<span>E-mail*</span>
						<input type="email" name="email" required="">
					</div><!--input-container-->

					<div class="input-container ">
						<span>Telefone</span>
						<input type="text" name="telefone" id="telefone" maxlength="15">
					</div><!--input-container-->

					<p class="warning-form">*Campos obrigatórios</p>

					<div class="input-submit-container">
						<input type="submit" name="acao" value="Enviar">
					</div><!--input-submit-container-->


				</form>
			</div><!--form-->
		</div>
			<div class="clear"></div>
			</div><!--center-->
	</div><!--container-banner-->

	<div class="container-2">
		<div class="center">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
		</div><!--center-->

		<div class="arrow"></div>
	</div><!--container-2-->

	<div class="section-1">
		<div class="center">
			<h2>Aprenda com quem está no mercado</h2>
			<div class="container-section">
				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="container-single">
					<div><img src="images/muscle-img.jpg"></div>
					<div class="text-container-single">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volelit esse molestie consequat, vel illum dolore</p>
					</div><!--text-container-single-->
				</div><!--container-single-->

				<div class="clear"></div>
			</div><!--container-section-->
		</div><!--center-->
	</div><!--section-1-->

	<div class="footer">
		<p>Todos os direitos reservados</p>
		<p>Av. Tereza Maciel Tavares, nº267, Jardim Marco Zero, cep:68902513, Macapá/AP</p>
	</div><!--footer-->

</body>

</html>