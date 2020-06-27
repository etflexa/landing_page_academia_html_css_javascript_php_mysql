<?php

	$pdo = new PDO('mysql:host=localhost;dbname=landing_page_db','root','');

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Lato";
	}

	body{
		background: rgb(225,225,225);
	}

	.header{
		padding: 10px 0;
		background: #333;
		color: white;
	}

	nav.menu ul{
		list-style-type: none;
	}

	nav.menu li{
		display: inline-block;
		padding: 0 8px;
	}

	nav.menu a{
		color: white;
	}
	.logo{
		float: left;
	}

	.clear{clear: both;}

	nav.menu{
		position: relative;
		top:4px;
		float: right;
	}

	.center{
		max-width: 1100px;
		margin: 0 auto;
		padding: 0 2%;
	}

	
	.sucesso{
		width: 100%;
		margin:10px 0;
		padding: 8px 15px;
		color: #3c763d;
		background: #dff0d8;
	}

	section.formularios{
		padding: 30px 0;

	}

	.box-formulario{
		float: left;
		width: 33.3%;
	
		padding: 10px;
	}
	.box-single-wraper{
		padding: 10px;
		background: white;
	}

	.box-single-wraper a{
		color: black;
		text-decoration: none;
	}

	a{
		text-decoration: none;
	}
	
</style>
	<title>ACADEMIA FIT - ADMINISTRADOR</title>
</head>
<body>
	<div class="header">
		<div class="center">
			<div class="logo">
				<h2>ACADEMIA FIT - PÁGINA DO ADMINISTRADOR</h2>
			</div>

			<nav class="menu">
				<ul>
					<li><a href="backup_dinamico\backup.php">Realizar Backup</a></li>
				</ul>
				
			</nav>

			<div class="clear"></div>
			
		</div>
	</div>

	<section class="formularios">
		<div class="center">
			<?php

				if(isset($_GET['excluir'])) {
					$id = (int)$_GET['excluir'];
					$pdo->exec("DELETE FROM `clientes` WHERE id = $id");
					echo '<div class="sucesso">Formulário deletado com sucesso</div>';
				}

				$info = $pdo->prepare("SELECT * FROM `clientes`");
				$info->execute();
				$info = $info->fetchAll();
				foreach ($info as $key => $value) {

			?>

			<div class="box-formulario">
				<div class="box-single-wraper">
					Nome: <?php echo $value['nome']; ?><br>
					E-mail: <?php echo $value['email']; ?><br>
					Telefone: <?php echo $value['telefone']; ?><br>
					<a href="?excluir=<?php echo $value['id']; ?>">EXCLUIR</a>
					
					
				</div>
				
			</div>

			<?php } ?>
			<div class="clear"></div>
			
		</div>
		
	</section>


</body>
</html>