<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeForm.php");
	require_once("../classeForm/classeButton.php");
	////////////////////////////////////////////////////
	$v = array("action"=>"insere.php?tabela=Professor","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_PROFESSOR","placeholder"=>"Id do professor...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"SOBRENOME","placeholder"=>"Sobrenome...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"NOME","placeholder"=>"Nome...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"PRONTUARIO","placeholder"=>"Prontuario...");
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
<h3>Formulário - Inserir Professor</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>