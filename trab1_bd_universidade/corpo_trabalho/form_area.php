<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeForm.php");
	require_once("../classeForm/classeButton.php");
	include("conexao.php");
	////////////////////////////////////////////////////
	$v = array("action"=>"insere.php?tabela=Area","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_AREA","placeholder"=>"Id da Area...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"NOME","placeholder"=>"Nome da Area...");
	$f->add_input($v);
	
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Area</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>