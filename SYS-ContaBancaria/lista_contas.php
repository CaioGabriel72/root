<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		
		include("classeContaEspecial.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Número da Conta</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["conta"] as $i=>$p){
					$p->exibeTR();
				}
			?>
		</tbody>
	</table>
	</body>
</html>