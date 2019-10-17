<?php

	include("../classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");

	require_once("../classeForm/InterfaceExibicao.php");
	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeOption.php");
	require_once("../classeForm/classeSelect.php");
	require_once("../classeForm/classeForm.php");
	require_once("../classeForm/classeButton.php");
	include("conexao.php");
	
	//seleção dos valores que irão criar o <select>//////

	$v = array("action"=>"insere.php?tabela=Disciplina","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_DISCIPLINA","placeholder"=>"Id da Disciplina...");
	$f->add_input($v);
	echo"<br/>";
    $v = array("type"=>"text","name"=>"NOME","placeholder"=>"Nome da Disciplina...");
	$f->add_input($v);
	echo"<br/>";
    $v = array("type"=>"text","name"=>"DESCRICAO","placeholder"=>"Descrição da Disciplina...");
	$f->add_input($v);
	echo"<br/>";
	$v = array("type"=>"number","name"=>"ANO","placeholder"=>"Ano em que está cursando a Disciplina...");
	$f->add_input($v);
	
	$select = "SELECT ID_CURSO AS value, NOME AS texto FROM curso ORDER BY NOME";
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	$v= array("name"=>"ID_CURSO");
	$f->add_select($v,$matriz);
	echo"<br/>";
	$select = "SELECT ID_PROFESSOR AS value, NOME AS texto FROM professor ORDER BY NOME";
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	$v= array("name"=>"ID_PROFESSOR");
	$f->add_select($v,$matriz);
	
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
<h3>Formulário - Inserir Disciplina</h3>

<hr />
<?php
	$f->exibe();
?>
</body>
</html>
</html>