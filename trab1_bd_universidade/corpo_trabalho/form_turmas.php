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

	$v = array("action"=>"insere.php?tabela=Turmas","method"=>"post");
	$f = new Form($v);
	$v = array("type"=>"number","name"=>"ID_TURMA","placeholder"=>"Id da Turma...");
    $f->add_input($v);
	$v = array("type"=>"number","name"=>"NUM_TURMA","placeholder"=>"Número da Turma...");
    $f->add_input($v);
    
	$select = "SELECT ID_ALUNO AS value, NOME AS texto FROM aluno ORDER BY NOME";
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	$v= array("name"=>"ID_ALUNO");
	$f->add_select($v,$matriz);

	$select = "SELECT ID_DISCIPLINA AS value, NOME AS texto FROM disciplina ORDER BY NOME";
	$stmt = $conexao->prepare($select);
	$stmt->execute();
	$v= array("name"=>"ID_DISCIPLINA");
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
<h3>Formulário - Inserir Turmas</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>