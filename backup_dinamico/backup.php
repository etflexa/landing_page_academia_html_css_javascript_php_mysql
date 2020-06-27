
<!DOCTYPE html>
<html>
<head>
	<title>Backup</title>
</head>
<body>
	<?php

	date_default_timezone_set('America/Sao_Paulo');
	define('HOST','localhost');
	define('DB','landing_page_db');
	define('USER','root');
	define('PASS','')
;
	function backup(){
		$db = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);

		$f = fopen(date('Y-m-d').'.sql','wt');

		$tables = $db->query('SHOW TABLES');
		foreach($tables as $table){
			$sql = '-- TABLE: '.$table[0].PHP_EOL;
			$create = $db->query('SHOW CREATE TABLE `'.$table[0].'`')->fetch();
			$sql.=$create['Create Table'].';'.PHP_EOL;
			fwrite($f, $sql);

			$rows = $db->query('SELECT * FROM `'.$table[0].'`');
			$rows->setFetchMode(PDO::FETCH_ASSOC);
			foreach($rows as $row){
				$row = array_map(array($db,'quote'),$row);
				$sql = 'INSERT INTO `'.$table[0].'` (`'.implode('`, `',array_keys($row)).'`) VALUES ('.utf8_encode(implode(', ',$row)).');'.PHP_EOL;
				fwrite($f, $sql);
			}
			$sql = PHP_EOL;
			$result = fwrite($f, $sql);

			if($result !== false){
				echo '<h2>BACKUP FEITO COM SUCESSO!</h2>';
			}else{
				echo 'BACKUP FALHOU!';

			}

			flush();
		}
		fclose($f);
	}

	backup();

?>
<a style="text-decoration: none;" href="../admin.php">Retornar à página do Administrador!</a>
</body>
</html>