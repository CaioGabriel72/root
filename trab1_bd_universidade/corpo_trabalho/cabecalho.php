<?php

	$c = new CabecalhoHTML();
	$v = array("professor"=>"professor","aluno"=>"aluno","disciplina"=>"disciplina","curso"=>"curso","turmas"=>"Turmas","area"=>"area");
	$c->add_menu($v);
	$c->exibe();

?>