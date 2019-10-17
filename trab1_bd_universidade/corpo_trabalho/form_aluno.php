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
	$select = "SELECT ID_CURSO AS value, NOME AS texto FROM curso ORDER BY NOME";
	
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	///////////////////////////////////////////////////////////////////////////////

	$v = array("action"=>"insere.php?tabela=Aluno","method"=>"post");
	$f = new Form($v);
	$v = array("type"=>"number","name"=>"ID_ALUNO","placeholder"=>"Id do Aluno...");
    	$f->add_input($v);
    	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"Nome do Aluno...");
    	$f->add_input($v);
    	$v = array("type"=>"number","name"=>"PRONTUARIO","placeholder"=>"Prontuario do Aluno...");
	$f->add_input($v);
	
	$v = array("name"=>"ID_CURSO");
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
<h3>Formulário - Inserir Aluno</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>